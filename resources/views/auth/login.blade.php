@extends('layouts.app')

@section('content')
    <div class="page-header" style="border:1px solid transparent;margin: 50px 0px 0px 0px;padding: 0px">
        <div class="tab-content" style="margin-left: -1px;margin-right: -1px;">
            <div class="tab-pane fade" id="home">
            </div>

            <div class="tab-pane fade active in" id="slack-mtech">
                <webview class="davis-webviews" src="https://mtechllc.slack.com" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="drupalni">
                <webview class="davis-webviews" src="https://drupalni.slack.com" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="active-collab">
                <webview id="active-collab-src" class="davis-webviews" src="https://app.activecollab.com/138123/projects" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="irccloud">
                <webview class="davis-webviews" src="https://www.irccloud.com/" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="google">
                <webview id="google-web" class="davis-webviews" src="https://www.google.com.ni/" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="telegram">
                <webview class="davis-webviews" src="https://web.telegram.org/" style="height: 268px;"></webview>
            </div>
            <!--<div class="tab-pane fade" id="hangouts">
							<webview class="davis-webviews" src="https://hangouts.google.com/"></webview>
						</div>-->
            <div class="tab-pane fade" id="whatsapp">
                <webview class="davis-webviews" src="https://web.whatsapp.com" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="gmail">
                <webview class="davis-webviews" src="https://mail.google.com/" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="youtube">
                <webview class="davis-webviews" src="https://www.youtube.com" style="height: 268px;"></webview>
            </div>
            <div class="tab-pane fade" id="facebook">
                <webview class="davis-webviews" src="https://www.facebook.com" style="height: 268px;"></webview>
            </div>
        </div>
    </div>
    </div>
@endsection
