
class WIPDirectory {
    static createPost() {
        var item = new wp.api.models.Directory({
            title: "Generated Item " + Date.now(),
            content: "Generated Item content: " + Date.now()
        });
        item.save();
        
//        var items = new wp.api.collections.Directory();
//        items.fetch().done(function (data) {
//            var d = data;
//        });
    }
}