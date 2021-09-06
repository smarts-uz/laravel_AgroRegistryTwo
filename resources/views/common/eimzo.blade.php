<div class="row">
  <!-- НАЧАЛО ЭЦП ПОЛЯ-->
  <div class="col-md-9">
    <div id="every-thing-ok" style="display: none" class="eimzo-keys-select">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:100%;">
          {{ __("messages.choose_key") }} <i class="fa fa-chevron-down pull-right"></i>
        </button>
        <ul class="dropdown-menu pki" aria-labelledby="dropdownMenu1" style="min-width:100%;">
          <li><a href="#">{{ __("messages.imzo_key") }}</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-3">
  	<button class="btn btn-info" type="button" style="width: 100%" onclick="AppLoad();">{{ __("messages.refresh_key") }}</button>
  </div>
  	<!--            КОНЕЦ ЭЦП ПОЛЯ  -->
  	<div id="not-installed" style="display: none; margin-top: -30px; padding: 15px;">
	    <br><p>
	      <span style="display: block; line-height: 26px">
	       @lang('messages.imzo_install_modul')
	      </span>
	      <button class="btn btn-primary btn-xs" href="https://e-imzo.uz/main/downloads/" role="button">
	        <i class="fa fa-download"></i>
	        @lang('messages.imzo_download_e-imzo')
	      </button> <br />
	      <strong>
	      <font size="-1">
	        {{ __("messages.imzo_install_modul_admin") }}
	      </font>
	      </strong>
	    </p>

	    <p> {{ __("messages.imzo_install_modul_doc") }} <a href="/index/help" style="text-decoration: underline">{{ __("messages.imzo_install_modul_here") }}</a>. </p>
	</div>
	<div id="upgrade-app" style="display: none"></div>
</div>

<div id="notification" style="display: none"></div>
<div class="jreject-header hidden hideme">
	<p class="alert alert-danger text-center"><i class="fa fa-exclamation-triangle"></i> {{ __("messages.imzo_browser_old") }}.</p>

	<p>{{ __("messages.imzo_browser_old2") }}</p>
	<p>{{ __("messages.imzo_browser_install") }}</p>
</div>

<textarea class="imzo-digital-key hideme" name="imzo-digital-key"></textarea>
<input type="hidden" class="imzo-tin hideme" name="imzo-tin" />
<input type="hidden" class="imzo-cn hideme" name="imzo-cn" />
