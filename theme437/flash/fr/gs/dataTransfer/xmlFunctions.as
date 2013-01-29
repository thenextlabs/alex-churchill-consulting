////////////////////////////////////////////////////////////////////////////////////////////
import flash.display.*;
function loadBitmapSmoothed(url:String, target:MovieClip) {
	// Create a movie clip which will contain our 
	// unsmoothed bitmap
	var bmc:MovieClip = target.createEmptyMovieClip("bmc", target.getNextHighestDepth());
	// Create a listener which will notify us when 
	// the bitmap loaded successfully
	var listener:Object = new Object();
	// Track the target
	listener.tmc = target;
	// If the bitmap loaded successfully we redraw the 
	// movie into a BitmapData object and then attach 
	// that BitmapData to the target movie clip with 
	// the smoothing flag turned on.
	listener.onLoadInit = function(mc:MovieClip) {
		mc._visible = false;
		var bitmap:BitmapData = new BitmapData(mc._width, mc._height, true);
		this.tmc.attachBitmap(bitmap, this.tmc.getNextHighestDepth(), "auto", true);
		bitmap.draw(mc);
	};
	// Do it, load the bitmap now
	var loader:MovieClipLoader = new MovieClipLoader();
	loader.addListener(listener);
	loader.loadClip(url, bmc);
}
/////////////////////////////////////////////////////////////////////////////////////////////////

var mainObj=_root.parsed_obj;


function textSelectable(selectedObject) {
	isTextSelected=getSettingsValue(mainObj, "textSelectable", "item");
	if (isTextSelected=="true") {
		selectedObject.selectable=true;
		
		}
	}

function getXmlSection (obj, itemName,  sectionName) {
		i=0;
	while (obj[itemName][i]) {
		if (obj[itemName][i].name==sectionName) {
			returnedResult=true;
			return (i);
			break;
		}
		i++;
	}
}
//-------------------------------------------------------------------------------------------------------
function getConfigOption(optionName):String
{
	var sectionNum:Number = getXmlSection( mainObj,"section", "configuration" );
	return mainObj["section"][sectionNum][optionName][0].value;
	
	
}
//-------------------------------------------------------------------------------------------------------
function getCurrentFolder(folderNumber) {
	sectionNum = getXmlSection(mainObj, "section", "pages");
	fParams = new Array();
	fParams['name'] = mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["fName"];
	fParams['title'] = mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["fTitle"];
	return (fParams);
	trace(fParams['name'])
}


//-------------------------------------------------------------------------------------------------------
function getCurrentFolderImg(folderNumber, imgNumber) {
	sectionNum = getXmlSection(mainObj, "section", "pages");
	currentPage=_root.link_gall-_root.firstPageFrame;
	imgParams = new Array();
	imgParams['name'] = mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["image"][imgNumber]["imageUrl"];
	//trace(mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["image"][imgNumber]["imageUrl"])
	
	imgParams['vid_url'] = mainObj[sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["image"][imgNumber]["link"];
	imgParams['size'] = Number(mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["image"][imgNumber]["size"]);
	imgParams['size_width'] = Number(mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["folder"][folderNumber]["image"][imgNumber]["size_width"]);
	return (imgParams);
	break;
}
//-------------------------------------------------------------------------------------------------------

function getGalleryText(textObj, folderNumber, textsNumber, optional:Boolean) {
	sectionNum = getXmlSection(mainObj, "section", "pages");
	
	                  // mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["gall_text"][0]["folder"][folderNumber]["image"][imgNumber]["imageUrl"];
	
	textObj.htmlText = mainObj["section"][sectionNum]["page"][currentPage]["gall"][0]["gall_text"][0]["folder"][folderNumber]["texts"][textsNumber].value;
	if (optional == undefined) {
		textSelectable(textObj);
	} else {
		// do nothing
	}
}

//-------------------------------------------------------------------------------------------------------
