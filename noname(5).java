output_path = _outputPath;
if (!FileUtil.isExistFile(_folderPath)) {
	FileUtil.makeDir(_folderPath);
}
Bitmap returnedBitmap = Bitmap.createBitmap(_view.getWidth(), _view.getHeight(),Bitmap.Config.ARGB_8888);

Canvas canvas = new Canvas(returnedBitmap);
android.graphics.drawable.Drawable bgDrawable =_view.getBackground();
if (bgDrawable!=null) {
	bgDrawable.draw(canvas);
} else {
	canvas.drawColor(Color.TRANSPARENT);
}
_view.draw(canvas);

java.io.File pictureFile = new java.io.File(output_path);
if (pictureFile == null) {
	showMessage("Error creating media file, check storage permissions: ");
	return; }
try {
	java.io.FileOutputStream fos = new java.io.FileOutputStream(pictureFile); returnedBitmap.compress(Bitmap.CompressFormat.JPEG, 100, fos);
	fos.close();
	
	
	showMessage("Image Saved in " + output_path + " folder");
	
	
	   
	   
	   
	   
	     // Tell the media scanner about the new file so that it is
	    // immediately available to the user.
	    MediaScannerConnection.scanFile(this,
	            new String[] { output_path.toString() }, null,
	            new MediaScannerConnection.OnScanCompletedListener() {
		        public void onScanCompleted(String path, Uri uri) {
						showMessage("Saved to Gallary");
			            Log.i("ExternalStorage", "Scanned " + path + ":");
			            Log.i("ExternalStorage", "-> uri=" + uri);
			        }
		    });
	   
	   
	   
	   
	   
	   
	   
	   
} catch (java.io.FileNotFoundException e) {
	showMessage("File not found: " + e.getMessage()); } catch (java.io.IOException e) {
	showMessage("Error accessing file: " + e.getMessage());
}