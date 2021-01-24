$(".btn").on("click", function(){
    alert($(this).attr('id'));
    document.location='pages/'+ ($(this).attr('id')) +'.html';
  });
