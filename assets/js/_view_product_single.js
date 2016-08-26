$(document).ready(function () {
    $('.otherPicturesItem').click(function(e){
        var clickedPictureSrc = $(e.currentTarget).attr('src');
        $('#currentPictureItem').attr('src', clickedPictureSrc);
        console.log('Changed');
    });
    /*
     $.ajax({
     url:"../../backend/controllers/product.php",
     success: function(data){
     var parsedData = JSON.parse(data);
     $.each(parsedData, function (index) {
     console.log(this);
     $('#productsTableBody').append(
     '<tr>' +
     '<td><a href="single.php?id='+this.id+'"> '+this.id+'</a></td>' +
     '<td>'+this.name+'</td>' +
     '<td>'+this.price+'</td>' +
     '<td>'+this.made_in+'</td>' +
     '<td>'+this.colors+'</td>' +
     '<td>'+this.size+'</td>' +
     '<td>'+this.description+'</td>' +
     '<td>' +
     '<button id="btnEdit" class="moderationBtn btn btn-info"><i class="glyphicon glyphicon-edit"></i></button>' +
     '<button id="btnRemove" class="moderationBtn btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>' +
     '</td>' +
     '</tr>');
     });
     }
     });
    */
});