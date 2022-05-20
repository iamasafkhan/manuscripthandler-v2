@extends('layouts.base')
@section('title', 'Journals Using Mh')
@section('content')

<section>
<div class="container mt-4 pt-5">
    <div class="row">
      <div class="col-md-12">
          <h4><b>Journals Using MH</b></h4>
    </div>
    <div class="col-md-12">
    <table width="100%" cellpadding="3" cellspacing="0" border="0" style="border:#CCC solid 1px;">
        <tbody>
            <tr style="background-color:#666; color:#FFF;">

                <th width="4%">S.no</th>
                <th width="61%" align="left">Journal Name</th>
                <th width="19%" align="left">Submit Online</th>
                <th width="16%" align="left">Journal Home Page</th>
            </tr>
            <tr>
                <td align="center" style="border-bottom:#CCC solid 1px;">1</td>
                <td style="border-bottom:#CCC solid 1px;">Advances in Animal and Veterinary Sciences</td>
                <td style="border-bottom:#CCC solid 1px;">
                    <a href="#">Submit Online</a>
                </td>
                <td style="border-bottom:#CCC solid 1px;">
                    <a href="#">View Home Page</a>
                </td>

            </tr>
        </tbody>

    </table>
</div>
</div>
</div>
</section>
@endsection
