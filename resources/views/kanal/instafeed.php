<script>

    function showInstagram(instagId) {
        console.log(instagId);
        var instaItem = new Instafeed({
            get: 'user',
            userId: instagId,
            accessToken: '48535775.467ede5.7e872bc432bf4229a26d716284dbf7c9',
            limit: 5,
            template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
            success: function (data) {
                console.log(data);
                // read the feed data and create owr own data struture.
                var images = data.data;
                var imgs = [];
                var result;
                for (i = 0; i < images.length; i++) {
                    var image = images[i];
                    result = this._makeTemplate(this.options.template, {
                        model: image,
                        id: image.id,
                        link: image.link,
                        image: image.images[this.options.resolution].url
                    });
                    imgs.push(result);
                }
                //split the feed into divs
                console.log('#instagram-' + instagId);
                $('#instagram-' + instagId).html(imgs);
            }
        });
        instaItem.run();
    }
    
</script>