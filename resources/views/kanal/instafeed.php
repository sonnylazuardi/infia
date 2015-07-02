<script>
    var instaLists = [
        // Informasi
        {
            name: 'infia-fact',
            id: 1302384083
        },
        {
            name: 'infia-health',
            id: 1370260777
        },
        {
            name: 'infia-showbiz',
            id: 1370275821
        },
        {
            name: 'infia-entrepreneur',
            id: 1373308993
        },
        {
            name: 'infia-tech',
            id: 1373128590
        },
        {
            name: 'infia-automotive',
            id: 1606806837
        }, 
        // Entertainment
        {
            name: 'dagelan',
            id: 367005646
        },
        {
            name: 'dagelantv',
            id: 1441085265
        },
        {
            name: 'ramalandagelan',
            id: 1673403429
        },
        {
            name: 'komikin-ajah',
            id: 1532214774
        },
        {
            name: 'komik-dagelan',
            id: 1835929849
        },
        {
            name: 'sahabatdagelan',
            id: 1551209130
        },
        // E-commerce
        {
            name: 'do-dolan',
            id: 1490731495
        },
        {
            name: 'infia-automarket',
            id: 1766823179
        },
        {
            name: 'infia-market',
            id: 1771308599
        },
        // Partner
        {
            name: 'dailymanly',
            id: 1583428661
        },
        {
            name: 'rahasiagadis',
            id: 1396112706
        },
        {
            name: 'yang-terdalam',
            id: 1551910706
        },
        {
            name: 'bolagila',
            id: 1388376735
        },
    ];

    var feeds = [];

    instaLists.forEach(function(item) {
        var instaItem = new Instafeed({
            get: 'user',
            userId: item.id,
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
                $('#'+item.name).html(imgs);
            }
        });
        instaItem.run();
        feeds.push(instaItem);
    });
    
</script>