<div class="container">
    <div class="filter clearfix closed">
        <div class="row">

            <div class="col col-3">
                <h3>{{ trans('filter.price') }}</h3>
                <ul>
                    {!! Form::open( array( 'route' => 'filterPrice', 'method' => 'post'))!!}
                    <li><button type="submit" name="id" value="1">Up to 5,000</button></li>
                    <li><button type="submit" name="id" value="2">5,000-10,000</button></li>
                    <li><button type="submit" name="id" value="3">10,000-25,000</button></li>
                    <li><button type="submit" name="id" value="4">25,000-50,000</button></li>
                    <li><button type="submit" name="id" value="4">50,000-100,000</button></li>
                    <li><button type="submit" name="id" value="5">Above</button></li>
                    {!! Form::close() !!}
                </ul>

                <h3>{{ trans('filter.endings') }}</h3>
                <ul>
                    {!! Form::open( array( 'route' => 'filterEndings', 'method' => 'post'))!!}
                    <li><button type="submit" name="id" value="1">Ending this week</button></li>
                    <li><button type="submit" name="id" value="2">Newly Listed</button></li>
                    <li><button type="submit" name="id" value="3">Purchase Now</button></li>
                    {!! Form::close() !!}
                </ul>

            </div>

            <div class="col col-3">
                <h3>{{ trans('filter.era') }}</h3>
                <ul>
                    {!! Form::open( array( 'route' => 'filterEra', 'method' => 'post'))!!}
                    <li><button type="submit" name="id" value="1">Pre-War</button></li>
                    <li><button type="submit" name="id" value="2">1940s-1960s</button></li>
                    <li><button type="submit" name="id" value="3">1960s-1980s</button></li>
                    <li><button type="submit" name="id" value="4">1980s-Present</button></li>
                    {!! Form::close() !!}
                </ul>


                <h3>{{ trans('filter.media') }}</h3>
                <ul>
                    {!! Form::open( array( 'route' => 'filterMedia', 'method' => 'post'))!!}
                    <li><button type="submit" name="id" value="1">Design</button></li>
                    <li><button type="submit" name="id" value="2">Paintings and Works on Paper</button></li>
                    <li><button type="submit" name="id" value="3">Photographs</button></li>
                    <li><button type="submit" name="id" value="4">Prints and Multiples</button></li>
                    <li><button type="submit" name="id" value="5">Sculpture</button></li>
                    {!! Form::close() !!}
                </ul>

            </div>

            <div class="col col-3">
                <h3>{{ trans('filter.style') }}</h3>
                <ul>
                    {!! Form::open( array( 'route' => 'filterStyle', 'method' => 'post'))!!}
                    <li><button type="submit" name="id" value="1">Abstract</button></li>
                    <li><button type="submit" name="id" value="2">African American</button></li>
                    <li><button type="submit" name="id" value="3">Asian Contemporary</button></li>
                    <li><button type="submit" name="id" value="4">Conceptual</button></li>
                    <li><button type="submit" name="id" value="5">Emergin Artists</button></li>
                    <li><button type="submit" name="id" value="6">Figurative</button></li>
                    <li><button type="submit" name="id" value="7">Middle Eastern Contemporary</button></li>
                    <li><button type="submit" name="id" value="8">Minimalism</button></li>
                    <li><button type="submit" name="id" value="9">Modern</button></li>
                    <li><button type="submit" name="id" value="10">Pop</button></li>
                    <li><button type="submit" name="id" value="11">Urban</button></li>
                    <li><button type="submit" name="id" value="12">Vintage Photographs</button></li>
                    {!! Form::close() !!}
                </ul>
            </div>


        </div>
    </div>
</div>