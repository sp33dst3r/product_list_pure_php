$( document ).ready(function() {
    $(".cart-btn").on("click", function(e){
        e.preventDefault();
        var self = $(this);
        var id = self.attr("data-id");
        $.ajax({
          method: "POST",
          url: "/cart/toggle/"+id,
        })
        .done(function( msg ) {
          if(msg == 'added'){
              self.removeClass("in").addClass("out").text("Удалить из корзины");
          }else{
            self.removeClass("out").addClass("in").text("Добавить в корзину");
          }
          //alert( "Data Saved: " + msg );
        });
    });

    
});