	<h1>Button markup</h1>

		<p>Add classes to style <code>a</code> and <code>button</code> elements. <code>input</code> buttons are enhanced by the button widget. See <a href="../button/index.html" data-ajax="false">this page</a> for examples.</p>

		<p>Note that in 1.4 <code>data-</code> attributes will still work. The deprecated <code>buttonMarkup</code> method will add the applicable classes to <code>a</code> (with <code>data-role="button"</code>) and <code>button</code> elements. This method also adds the <code>role="button"</code> attribute to anchor elements.</p>

		<h2>Basic markup</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn">Anchor</a>
			<button class="ui-btn">Button</button>
		</div><!--/demo-html -->

		<h2>Corners</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-corner-all">Anchor</a>
			<button class="ui-btn ui-corner-all">Button</button>
		</div><!--/demo-html -->

		<p>Icon-only buttons are round by default. Here we show how you can set the same border-radius as other buttons.</p>

		<div data-demo-html="true" data-demo-css="true">
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all">No text</a>
			<div id="custom-border-radius">
				<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all">No text</a>
			</div>
		</div><!--/demo-html -->

		<h2>Shadow</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-shadow">Anchor</a>
			<button class="ui-btn ui-shadow">Button</button>
		</div><!--/demo-html -->

		<h2>Inline</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-btn-inline">Anchor</a>
			<button class="ui-btn ui-btn-inline">Button</button>
		</div><!--/demo-html -->

		<h2>Theme</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn">Anchor - Inherit</a>
			<a href="#" class="ui-btn ui-btn-a">Anchor - Theme swatch A</a>
			<a href="#" class="ui-btn ui-btn-b">Anchor - Theme swatch B</a>
			<button class="ui-btn">Button - Inherit</button>
			<button class="ui-btn ui-btn-a">Button - Theme swatch A</button>
			<button class="ui-btn ui-btn-b">Button - Theme swatch B</button>
		</div><!--/demo-html -->

		<h2>Mini</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-mini">Anchor</a>
			<button class="ui-btn ui-mini">Button</button>
		</div><!--/demo-html -->

		<h2>Icons</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-left">Anchor</a>
			<button class="ui-btn ui-icon-delete ui-btn-icon-left">Button</button>
		</div><!--/demo-html -->

		<h2>Icon position</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-left">Left</a>
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-right">Right</a>
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-top">Top</a>
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-bottom">Bottom</a>
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-notext">Icon only</a>
		</div><!--/demo-html -->

		<p>Inline:</p>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-left">Left</a>
			<a href="#" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-right">Right</a>
			<a href="#" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-top">Top</a>
			<a href="#" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-bottom">Bottom</a>
			<a href="#" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-notext">Icon only</a>
		</div><!--/demo-html -->

		<h2>Icon shadow</h2>
		<p>Note: This styling option is deprecated in jQuery Mobile 1.4.0 and will be removed in 1.5.0. Accordingly, we changed the default for framework-enhanced buttons to false.</p>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-icon-delete ui-btn-icon-left ui-shadow-icon">Anchor</a>
			<p>Theme B:</p>
			<button class="ui-btn ui-icon-delete ui-btn-icon-left ui-shadow-icon ui-btn-b">Button</button>
		</div><!--/demo-html -->

		<h2>Disabled</h2>

		<div data-demo-html="true">
			<a href="#" class="ui-btn ui-state-disabled">Disabled anchor via class</a>
			<button disabled>Button with disabled attribute</button>
		</div><!--/demo-html -->

		<h2>Native button</h2>
		<!-- TODO: Remove this demo in 1.5 -->
		<p>In 1.4 <code>button</code> will still be auto-enhanced. This example shows how you can prevent this.</p>

		<div data-demo-html="true">
			<button data-role="none">Button</button>
		</div><!--/demo-html -->