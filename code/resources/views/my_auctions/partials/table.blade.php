<table>
    <tr>
        <th></th>
        <th class="heading__weight--normal heading__color--grey--mid td__padding--left td__text--left"> {{ trans('my-auctions.auction-details') }}</th>
        <th class="heading__weight--normal heading__color--grey--mid"> {{ trans('my-auctions.estimated-price') }}</th>
        <th class="heading__weight--normal heading__color--grey--mid"> {{ trans('my-auctions.end-time') }}</th>
        <th class="heading__weight--normal heading__color--grey--mid td__text--center"> {{ trans('my-auctions.remaining-time') }}</th>
    </tr>

    @foreach($auctions as $item)

        <tr>
            <td class="td--xs bg-img" style="background-image: url( {{asset( 'img/'. $item->image_artwork )}}  );">

            </td>
            <td class="td--md td__padding--left">
                <h2 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid">{{$item->title}}</h2>
                <h3 class="heading heading__size--small heading__weight--bold heading__color--theme--dark">1979, Salvador Dali</h3>
            </td>
            <td class="td--sm td__text--center">
                <h2 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid">&#8364; {{$item->buyout_price}}</h2>
            </td>
            <td class="td--sm td__text--center td__padding--around">
                <h3 class="heading heading__size--small heading__weight--bold heading__color--grey--mid">September 09, 2013 13:00 p.m. (EST)</h3>
            </td>
            <td class="td--sm td__text--center td__padding--around">
                <h3 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid">25d 14u 44m</h3>
            </td>
        </tr>

    @endforeach

</table>