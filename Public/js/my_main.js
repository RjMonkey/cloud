
function handleFile(){
    var file = document.getElementById("file");
    var fileName = document.getElementById("fileName");
    fileName.innerHTML = file.value;
}

function showdiv()
{
    var doc=document;
    var citytext=doc.getElementById("type-select").value;
    var div=doc.getElementById("tag");


    switch (citytext)
    {
        case "pic":
            div.setAttribute("style","display");
            break;
        default:
            div.setAttribute("style","display: none");

            break;
    }
}
 function uploadInsert() {
     $.ajax({
         cache: true,
         type: "POST",
         url: '/cloud/index.php/Home/Upload/upload',
         data:$('#formId').serialize(),// 你的formid
         async: false,

         error: function(request) {
             alert("Connection error");
         },
         success: function(data) {

            alert(data)
         }
     });
 }