@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card pb-4">
                <div class="card-header" style="font-size: 18px;">
                    <center><b>Your Partnership Diary</b></center>
                </div>
                <br>
                <center>
                    <h3><b>Welcome {{Auth::user()->name}}!</b></h3>

                    <p>"Your Partnership Diary as been created for Hypo Hounds Clients to enable easier management of
                        your BG levels and your dog's alert diaries. "</p>
                    <br>
                    <p>From here you can access your Diary by clicking on the button in the top right hand corner "My
                        Diary". From here you can proceed to just adding a BG result or if your dog alerted you or
                        missed an alert you can document it in the Diary.
                    </p>

                    <p>The Hypo Hounds Team will have also sent you a guide on how to complete a Diary entry. There is
                        also a video in the 'Help' section on how to use the app from your mobile device.</p>

                    <p>New Chapter Web Development and Hypo Hounds hope you find this application easy and quick to use.
                        Hypo Hounds will be able to view your Diary, so you don't need to worry about sending in your BG
                        and alert diaries into Hypo Hounds because they will already have access to it. We have included
                        a section that will give you your previous 90 days report so you can have a closer look at your
                        diary.</p>

                    <p>Please do not hesitate to email me, which is given below and I will get back to you as soon as
                        I'm able.</p>

                    <h3>"Thank you and we hope your enjoy <b>Your Partnership Diary</b>"</h3>
                </center>
            </div>
        </div>
    </div>
</div>

@endsection