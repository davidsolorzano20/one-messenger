@extends('layouts.app')

@section('content')
  <div class="page-header" style="border:1px solid transparent;margin: 49px 0px 0px 0px;padding: 0px">
    <div class="tab-content" style="margin-left: -1px;margin-right: -1px;">
      <div class="tab-pane fade" id="home">
      </div>

      <div class="tab-pane fade active in" id="gmail">
        <webview class="davis-webviews" src="https://mail.google.com/" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="facebook">
        <webview class="davis-webviews" src="https://www.facebook.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="messenger">
        <webview class="davis-webviews" src="https://www.messenger.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="whatsapp">
        <webview class="davis-webviews" src="https://web.whatsapp.com" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="telegram">
        <webview class="davis-webviews" src="https://web.telegram.org/" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="twitter">
        <webview class="davis-webviews" src="https://twitter.com/" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="linkedin">
        <webview class="davis-webviews" src="https://linkedin.com/" style="height: 268px;"></webview>
      </div>
      <div class="tab-pane fade" id="youtube">
        <webview class="davis-webviews" src="https://www.youtube.com" style="height: 268px;"></webview>
      </div>
    </div>
  </div>
  </div>
@endsection
