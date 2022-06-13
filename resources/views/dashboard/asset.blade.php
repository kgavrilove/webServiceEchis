@include('main.header')

<script src="{{ asset('js/asset.js') }}"></script>
<div class="container">
@if ($data)
    <div class="row">
        <div class="col-6">
            <h5>Name: {{$data['asset']['name']}}</h5>
            <h5>Author: {{$data['asset']['author']}}</h5>
            <h5>created_at: {{$data['asset']['created_at']}}</h5>
            <h5>updated_at: {{$data['asset']['updated_at']}}</h5>
            <h5>Param: {{$data['aidata'][0]['scheme']}}</h5>
            <h5>Param: {{$data['aidata'][0]['a_color']}}</h5>
            <h5>Param: {{$data['aidata'][0]['b_color']}}</h5>
            <h5>Param: {{$data['aidata'][0]['c_color']}}</h5>
            <h5>Param: {{$data['aidata'][0]['d_color']}}</h5>
            <h5>Param: {{$data['aidata'][0]['e_color']}}</h5>


        </div>
        <div class="col-6">
            <img class=" assetImage img-fluid mt-5" src="https://uposter.ru/uploads/images/lsgallery/2015/03/30/f3b91b1b2d.jpg" alt="">
        </div>
    </div>
    @else
    <h1>Data not found</h1>

    @endif
</div>
@include('main.footer')
