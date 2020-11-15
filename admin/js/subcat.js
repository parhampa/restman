function loadsubcat() {
    postobj.send_type = "post";
    postobj.post_url = "subcat.php";
    postobj.after_success = function (data) {
        document.getElementById('cat_id').innerHTML = data;
    }
    res_obj_postdata("subcatitem");
}