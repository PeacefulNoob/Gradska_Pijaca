<div class="col-xl-3 col-lg-4 col-md-12">
					
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista svih kategorija</h3>
        </div>
        <div class="card-body">
            <div class="" id="container">
                <div class="filter-product-checkboxs">
                    @foreach ($categories as $categ)
                        
                    
                    <label class="custom-control custom-checkbox mb-3">
                        <span class="">
                            <a href="/categories/{{$categ->id}}" class="text-dark">{{$categ->title}}</a>
                        </span>
                    </label>
                @endforeach
                </div>
            </div>
        </div>
    
    </div>
    
    
    
        
    
</div>