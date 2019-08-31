function viewProduct(id){
    $.ajax({
        url : '/products/view/'+id,
        method : 'GET',
        success:function(data){
            $('#data').html(data);
        }
    })
}

function editProduct(id){
    $.ajax({
        url : '/products/edit/'+id,
        method : 'GET',
        success:function(data){
            $('#data').html(data);
        }
    })
}