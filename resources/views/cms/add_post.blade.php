
<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link href="/font/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="/img/favicon.ico">

        <link href="/css/materialize.min.css" rel="stylesheet">
        <link href="/css/materialNote.css" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/admin_style.css">

        <title>Add Post | Blog-Tarang 2016</title>
    </head>
    
    <body>
        
        <nav class="row">
            <h4 class="brand-logo col s12 m3">Tarang 2016</h4>
            <ul class="right col s12 m3">
                <li class="col s6"><a href="/admin/add">Add New Post</a></li>
                <li class="col s6"><a href="/admin/edit">Edit Post</a></li>
            </ul>
        </nav>
        
        <div class="container">
            <h4 class="col s12 m6 offset-m3">Add Post</h4>
            <form class="col s12" method="post" action="/admin/create">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="input-field col s12 m6 offset-m3">
                    <input type="hidden" name="body" id="body">
                    <input id="heading" name="heading" type="text" required>
                    <label for="heading">Enter Post Heading</label>
                </div>
                <div class="submit_post col s12 m2 offset-m5">
                <a class="btn waves-effect waves-light modal-trigger" onclick="getHTML()" href="#preview_modal">Preview</a>
                </div>
                <div id="preview_modal" class="modal" style="padding:5px;">
                <h4 style="margin:20px auto;font-size:2em">Preview</h4><hr>
                <div id="preview" style="padding:10px 0px"></div>
                <hr>
                <div class="submit_post" style="text-align:center;padding:10px">
                    <button class="btn waves-effect waves-light" href="#" type="submit">post</button>
                </div>
            </div>
            </form>
            <div id="summernote" class="col s12"><p>Your Article here......</p></div>
        </div>
        
        <script src="/js/jquery-2.1.4.js"></script>
        <script src="/js/materialize.min.js"></script>
        <script src="/js/ckMaterializeOverrides.js"></script>
        <script src="/js/materialnote.min.js"></script>
        <script>
            function getHTML(){
                    var markupstr = $('#summernote').code();
                    document.getElementById("preview").innerHTML = markupstr;
                    console.log(markupstr);
                    document.getElementById("body").value = markupstr;
            }
            
            $(document).ready(function() {
                $('.tooltipped').tooltip({delay: 50});
                $('.modal-trigger').leanModal();
            });
            
            $(function() {
                $('#summernote').materialnote({
                  toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['height', ['height']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['picture','hr']],
                    ['misc', ['codeview','undo','redo']],
                  ],
                    onImageUpload: function(files, editor, $editable) {
                      sendFile(files[0],editor,$editable);
                    },
                });
                
                   function sendFile(file,editor,welEditable) {
                      data = new FormData();
                      data.append("file", file);
                       $.ajax({
                       url: "/uploader.php",
                       data: data,
                       cache: false,
                       contentType: false,
                       processData: false,
                       type: 'POST',
                       success: function(data){
                       alert(data);
                        $('#summernote').materialnote("insertImage", data, 'filename');
                        },
                       error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus+" "+errorThrown);
                       }
                    });
                   }
            });
            
          </script>
    </body>
    
</html>