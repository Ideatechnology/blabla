	<h1>Input buttons</h1>

		<p>Examples of how to style input buttons; <code>input</code> elements with <code>type="button"</code>, <code>type="submit"</code>, or <code>type="reset"</code>. See <a href="../button-markup/index.html">button markup</a> for examples of <code>a</code> and <code>button</code> elements.</p>

		<h2>Default</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" value="Button">
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>
		</div><!--/demo-html -->

		<h2>Enhanced</h2>

		<div data-demo-html="true">
			<form>
				<div class="ui-input-btn ui-btn ui-corner-all ui-shadow">
					Input value
					<input type="button" data-enhanced="true" value="Input value">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Corners</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" value="Has corners by default">
				<input type="button" data-corners="false" value="Unset corners">
				<div class="ui-input-btn ui-btn ui-corner-all">
					Enhanced
					<input type="button" data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<p>Icon-only buttons are round by default. Here we show how you can set the same border-radius as other buttons.</p>

		<div data-demo-html="true" data-demo-css="true">
			<form>
				<input type="button" data-icon="delete" data-iconpos="notext" value="Icon only">
				<div id="custom-border-radius">
					<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all">
						Enhanced - Icon only
						<input type="button" data-enhanced="true" value="Enhanced - Icon only">
					</div>
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Shadow</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" value="Has shadow by default">
				<input type="button" data-shadow="false" value="Unset shadow">
				<div class="ui-input-btn ui-btn ui-shadow">
					Enhanced
					<input type="button" data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Inline</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" data-inline="true" value="Input">
				<div class="ui-input-btn ui-btn ui-btn-inline">
					Enhanced
					<input type="button" data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Theme</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" value="Input - Inherit">
				<input type="button" data-theme="a" value="Input - Theme swatch A">
				<input type="button" data-theme="b" value="Input - Theme swatch B">
				<div class="ui-input-btn ui-btn">
					Enhanced - Inherit
					<input type="button" data-enhanced="true" value="Enhanced - Inherit">
				</div>
				<div class="ui-input-btn ui-btn ui-btn-a">
					Enhanced - Theme swatch A
					<input type="button" data-enhanced="true" value="Enhanced - Theme swatch A">
				</div>
				<div class="ui-input-btn ui-btn ui-btn-b">
					Enhanced - Theme swatch B
					<input type="button" data-enhanced="true" value="Enhanced - Theme swatch B">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Mini</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" data-mini="true" value="Input">
				<div class="ui-input-btn ui-btn ui-mini">
					Enhanced
					<input type="button" data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Icons</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" data-icon="delete" value="Input">
				<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-left">
					Enhanced
					<input type="button" data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Icon position</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" data-icon="delete" value="Left (default)">
				<input type="button" data-icon="delete" data-iconpos="right" value="Right">
				<input type="button" data-icon="delete" data-iconpos="top" value="Top">
				<input type="button" data-icon="delete" data-iconpos="bottom" value="Bottom">
				<input type="button" data-icon="delete" data-iconpos="notext" value="Icon only">
				<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-left">
					Enhanced - Left
					<input type="button" data-enhanced="true" value="Enhanced - Left">
				</div>
				<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-right">
					Enhanced - Right
					<input type="button" data-enhanced="true" value="Enhanced - Right">
				</div>
				<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-top">
					Enhanced - Top
					<input type="button" data-enhanced="true" value="Enhanced - Top">
				</div>
				<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-bottom">
					Enhanced - Bottom
					<input type="button" data-enhanced="true" value="Enhanced - Bottom">
				</div>
				<div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-notext">
					Enhanced - Icon only
					<input type="button" data-enhanced="true" value="Enhanced - Icon only">
				</div>
			<form>
		</div><!--/demo-html -->

		<h2>Icon shadow</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" data-theme="b" data-icon="delete" data-iconshadow="true" value="Input">
				<div class="ui-input-btn ui-btn ui-btn-b ui-icon-delete ui-btn-icon-left ui-shadow-icon">
					Enhanced
					<input type="button" data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Disabled</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" disabled value="Input button with disabled attribute">
				<div class="ui-input-btn ui-btn ui-state-disabled">
					Enhanced
					<input type="button" disabled data-enhanced="true" value="Enhanced">
				</div>
			</form>
		</div><!--/demo-html -->

		<h2>Native inputs</h2>

		<div data-demo-html="true">
			<form>
				<input type="button" data-role="none" value="Button">
				<input type="submit" data-role="none" value="Submit">
				<input type="reset" data-role="none" value="Reset">
			</form>
		</div><!--/demo-html -->
