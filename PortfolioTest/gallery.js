window.onload = function() {
    post('galleryDatabase.php').then(function(data){
        document.getElementById("image-1").src = data[0]['imgName'];
        document.getElementById("image-2").src = data[1]['imgName'];
        document.getElementById("image-3").src = data[2]['imgName'];
    });
};

async function post(url) {
    const respone = await fetch(url,{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
    });
    return respone.json();
}