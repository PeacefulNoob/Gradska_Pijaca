





    <div class="search-background bg-transparent">
        <div class="form row no-gutters ">
            <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Izaberi Oglas"  id="selectbox"  onchange="javascript:location.href = this.value;">
                    <option value="#">Izaberi Oglas</option>
                    @foreach ($all_ads as $ad)
                    <option value="/ad/{{$ad->id}}">{{$ad->title}}</option>
                    @endforeach
            </select>
            </div>
            <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Izaberi Lokaciju"  id="selectbox"  onchange="javascript:location.href = this.value;">
                    <option value="#">Izaberi Lokaciju</option>
                    @foreach ($ad_location as $ad)
                    <option value="/showLocation/{{$ad->location}}">{{$ad->location}}</option>
                    @endforeach
            </select>									</div>
            <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Izaberi Kategoriju"   id="selectbox"  onchange="javascript:location.href = this.value;">
                        <option value="#">Izaberi Kategoriju</option>
                        @foreach ($categories as $category)
                        <option value="/categories/{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                <a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Pretraga</a>
            </div>

            
        </div>
        
    </div>