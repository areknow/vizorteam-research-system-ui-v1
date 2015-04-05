function download(id, path) {
    var data = {userid: id, filepath: path};
    $.post('updatedownload.php', data, function(returnedData) {
        //console.log(returnedData);
        link();
    });
    function link() {
        location.href='http://ours.secs.oakland.edu/res/docs/id'+id+'/'+path+'.pdf';
    }   
}