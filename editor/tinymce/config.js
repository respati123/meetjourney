tinymce.init({
	  selector: "textarea.editor" ,theme: "modern", width:875, height:400,
	  relative_urls: false,
	  remove_script_host: false,
   
	  plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,

	external_filemanager_path:"/editor/filemanager/",
   	filemanager_title:"Responsive Filemanager" ,
   	external_plugins: { "filemanager" : "/editor/filemanager/plugin.min.js"}
	 
});