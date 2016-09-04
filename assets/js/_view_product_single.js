$(document).ready(function () {
    $('.otherPicturesItem').click(function(e){
        var clickedPictureSrc = $(e.currentTarget).attr('src');
        $('#currentPictureItem').attr('src', clickedPictureSrc);
        console.log('Changed');
    });
});