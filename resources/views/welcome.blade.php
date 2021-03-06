@extends('layouts.app')

@section('content')
  <div class="page-header" style="border:1px solid transparent;margin: 49px 0px 0px 0px;padding: 0px">
    <div class="tab-content" style="margin-left: -1px;margin-right: -1px;">
      <div class="tab-pane fade" id="home">
      </div>
      <div class="tab-pane fade active in" id="facebook">
        <webview id="facebook-views" class="davis-webviews" src="https://www.facebook.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="twitter">
        <webview id="twitter-views" class="davis-webviews" src="https://twitter.com/" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="linkedin">
        <webview id="linkedin-views" class="davis-webviews" src="https://www.linkedin.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="gmail">
        <webview id="gmail-views" class="davis-webviews" src="https://mail.google.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="messenger">
        <webview id="messenger-views" class="davis-webviews" src="https://www.messenger.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="whatsapp">
        <webview id="whatsapp-views" class="davis-webviews" src="https://web.whatsapp.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="telegram">
        <webview id="telegram-views" class="davis-webviews" src="https://web.telegram.org/" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="youtube">
        <webview id="youtube-views" class="davis-webviews" src="https://www.youtube.com" style="height: 268px;"></webview>
      </div>
    </div>
  </div>
  </div>
@endsection
