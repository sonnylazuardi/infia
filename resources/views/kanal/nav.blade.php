<ul class="nav nav-stacked kanal-nav" id="sidebar">
    <div class="nav-heading">
        {!! Form::list_menu('kanal/index', 'INFIA WORLD') !!}
    </div>
    {!! Form::list_menu('kanal/category/information', ' Information') !!}
    {!! Form::list_menu('kanal/category/entertainment', 'Entertainment') !!}
    {!! Form::list_menu('kanal/category/e-commerce', 'E-Commerce') !!}
    {!! Form::list_menu('kanal/category/partner', 'Partner') !!}
</ul>
