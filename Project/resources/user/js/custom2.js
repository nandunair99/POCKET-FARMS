$(function()
{
	console.log('hellothere');
   var inputfile=$('input[name=files]');
   var uploadurl=$('#uploadprodimg').attr('action');
   var progressbar=$('#progress-bar');
   $('#uploadprodimg').on('click',function(event)
   {
   	 var filetoupload=inputfile[0].files[0];
   	 if(filetoupload != 'undefined')
   	 {
   	 	var formdata=new FormData();
   	 	formdata.append('files',filetoupload);
   	 	$.ajax(
   	 	{
            url:uploadurl,
            type:'post',
            data:formdata,
            processData:false,
            contentType:false,
            success:function()
            {
            	alert('1st file uploaded');
            },
            xhr:function()
            {
            	var xhr=new XMLHttpRequest();
            	xhr.upload.addEventListener("progress",function(event){
            		
            		if(event.lengthComputable)
            		{
                       
            			var percentagecomplete=Math.round((event.loaded/event.total)*100);
            			//console.log(percentagecomplete);
            			 progressbar.css({width:percentagecomplete+'%'});

            	    }
            	},false);
            	

            	return xhr;
            }
   	 	});
   	 }
   });
});
$(function()
{
   console.log('hellothere2');
   var inputfile=$('input[name=files2]');
   var uploadurl=$('#uploadauctimg').attr('action');
   var progressbarr=$('#progress-bar2');
   $('#uploadauctimg').on('click',function(event)
   {
       var filetoupload=inputfile[0].files[0];
       if(filetoupload != 'undefined')
       {
         var formdata=new FormData();
         formdata.append('files2',filetoupload);
         $.ajax(
         {
            url:uploadurl,
            type:'post',
            data:formdata,
            processData:false,
            contentType:false,
            success:function()
            {
               alert('2nd file uploaded');
            },
            xhr:function()
            {console.log('in xhr');
               var xhr=new XMLHttpRequest();
               xhr.upload.addEventListener("progress",function(event){
                  
                  if(event.lengthComputable)
                  {
                       console.log('in progress');
                     var percentagecomplete=Math.round((event.loaded/event.total)*100);
                     console.log(percentagecomplete);
                      progressbarr.css({width:percentagecomplete+'%'});

                   }
               },false);
               

               return xhr;
            }
         });
       }
   });
});

$(function()
{
   console.log('hellothere3');
   // var inputfile=$('input[name=files3]');
   var uploadurl=$('#uploadmoreauctimg').attr('action');
   var progressbarr=$('#progress-bar3');
   $('#uploadmoreauctimg').on('click',function(event)
   {

      var files=$('#files3')[0].files;//all files properties padded to var
      var error='';
      var formdata=new FormData();
      for(var cnt=0;cnt<files.length;cnt++)
      {
         var name=files[cnt].name;
         var ext=name.split('.').pop().toLowerCase();
         if(jQuery.inArray(ext,['gif','png','jpg','jpeg'])==-1)
         {
            error="invalid "+cnt+" image file";
         }
         else
         {
            formdata.append('files3[]',files[cnt]);
         }
      }
      if(error=='')
      {
          $.ajax(
         {

            url:uploadurl,
            method:'POST',
            data:formdata,
            processData:false,
            contentType:false,
            cache:false,
            success:function()
            {
               alert('3rd file uploaded');
            },
            xhr:function()
            {console.log('in xhr');
               var xhr=new XMLHttpRequest();
               xhr.upload.addEventListener("progress",function(event){
                  
                  if(event.lengthComputable)
                  {
                       console.log('in progress');
                     var percentagecomplete=Math.round((event.loaded/event.total)*100);
                     console.log(percentagecomplete);
                      progressbarr.css({width:percentagecomplete+'%'});

                   }
               },false);
               

               return xhr;
            }
         }) 
      }
      else
      {
         alert(error);
      }
       // var filetoupload=inputfile[0].files[0];
       // if(filetoupload != 'undefined')
       // {
         
       //   formdata.append('files3',filetoupload);
         
       // }
   });
});