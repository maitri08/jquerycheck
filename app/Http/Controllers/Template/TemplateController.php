<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\TemplateOffset;
use App\Template;
use App\ProductSize;
class TemplateController extends Controller
{
	public function designermenu(Request $request){
		$pageproduct = $request->pageproduct;
		$pageid = $request->pageproductval;
		$canvascoord = ProductSize::where('id',$pageid)->get();

		foreach ($canvascoord as $valuecoord) {
			$pageproductsize = $valuecoord->id;
			if($valuecoord->dimension=='mm'){
				$pagesizewidth = $valuecoord->width * 3.78;
				$pagesizeheight = $valuecoord->height * 3.78;
			}
			else if($valuecoord->dimension=='inc'){
				$pagesizewidth = $valuecoord->width * 96 ;
				$pagesizeheight = $valuecoord->height * 96;				
			}
		}
		
		return view('template.designer')->with(['canvaswidth'=>$pagesizewidth,'canvasheight'=>$pagesizeheight,'producttype'=>$pageproduct,'pageproductsize'=>$pageproductsize]);
	}

   public function cordinate(Request $request){
        // $shapeBoxId = json_encode(['boxid'=>$request->boXid,'offsetX'=>$request->offsetX,'offsetY'=>$request->offsetY,'boXwidth'=>$request->boXwidth,'boXheight'=>$request->boXheight]);
   	   $imgObj = json_decode($request->imgresult);
   	   $items = [];
   	   $i = 0;
   	    foreach($imgObj as $imgArr){
   	    	$imgData= $imgArr->imgupload;
			$img = explode(',', $imgData);
		    $imgEntry = array_pop($img);
		    $data = base64_decode($imgEntry);
		    $imgcreateUrl = public_path().'/uploads/embelishment';
		    $filename = $imgArr->id.uniqid() . '.png';
		    $file = $imgcreateUrl.'/'.$filename;
		    file_put_contents($file, $data);
		    $items[$i]['id'] = $imgArr->id;
		    $items[$i]['imgname'] = $filename;
		    $items[$i]['offsetX'] = $imgArr->offsetX;
		    $items[$i]['offsetY'] = $imgArr->offsetY;
		    $items[$i]['imgwidth'] = $imgArr->imgwidth;
		    $items[$i]['imgheight'] = $imgArr->imgheight;
		    $i++;

   	    } 
   	       // to save the template name 		
   	    $templatemodule = new Template();
   	    $templatemodule->template_name = $request->templatename;
   	    $templatemodule->product_type = $request->product;
   	    $templatemodule->template_size = $request->productsize;
   	    $templatemodule->save();
   	     // to save the template name 
   	    $storedtemplate = $templatemodule->id;
   	     // to save the template name 
   	    $bckcreateUrl = public_path().'/uploads/background';
   	    $bckgroundname = uniqid() . '.jpg';
   	    $bckimgpath =  $bckcreateUrl.'/'.$bckgroundname;
   	    $backimg = explode(',', $request->bckgroundresult);
   	    $backimgEntry = array_pop($backimg);
   	    $backdataurl = base64_decode($backimgEntry);

   	    file_put_contents($bckimgpath, $backdataurl);
   	 
   	    $json_imgproduct =  json_encode($items);
	    $shapeObj = $request->shaperesult;
	  	$template = new TemplateOffset();
	  	$template->template_type = $storedtemplate;
	    $template->shape_offset = $shapeObj;
	    $template->img_offset = $json_imgproduct;
	    $template->bckgrnd_img = $bckgroundname;
	    $template->text_offset = $request->txtresult;
	    $template->save();
	    $redirectto = $request->redirecttask;
	    return $redirectto;

   }



   public function sizeselection(Request $request){
   	$sizeval = $request->selectsize;
   	$dropdownsize = ProductSize::where('product_id',$sizeval)->get();
   	$count = $dropdownsize->count();
   	foreach ($dropdownsize as $sizeselect) {
   	echo "<option data-dimension='".$sizeselect->dimension."'  data-height='".$sizeselect['height']."' data-width='".$sizeselect['width']."' value='".$sizeselect['id']."'>".$sizeselect['width']."x".$sizeselect['height']."-".$sizeselect->dimension."</option>";
   	}
  
   }
}
