function loadpackage() {
    postobj.send_type = "post";
    postobj.post_url = "load_packages.php";
    postobj.after_success = function (data) {
        document.getElementById('pack_id').innerHTML = data;
        loadproduct();
    }
    res_obj_postdata("loadrestitems");
}

function loadproduct() {
    postobj.send_type = "post";
    postobj.post_url = "load_products.php";
    postobj.after_success = function (data) {
        document.getElementById('product_id').innerHTML = data;
    }
    res_obj_postdata("loadrestitems");
}