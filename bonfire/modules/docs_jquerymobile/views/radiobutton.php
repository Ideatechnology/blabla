	<h1>Radio buttons</h1>

		<p>Radio inputs are used to provide a list of options where only a single option can be selected. Radio buttons are enhanced by the checkboxradio widget.</p>

		<h2>Basic markup</h2>

		<p>To create a set of radio buttons, add an <code>input</code> with a <code>type="radio"</code> attribute and a corresponding <code>label</code>. Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>input</code> so they are semantically associated.</p>

		<div data-demo-html="true">
            <form>
				<label>
					<input type="radio" name="radio-choice-0" id="radio-choice-0a">One
				</label>

                <label for="radio-choice-0b">Two</label>
                <input type="radio" name="radio-choice-0" id="radio-choice-0b" class="custom">
        	</form>
		</div><!--/demo-html -->

		<h2>Vertical group</h2>

		<p>To visually integrate multiple radio buttons into a vertically grouped button set, the framework will automatically remove all margins between buttons and round only the top and bottom corners of the set if there is a <code> data-role="controlgroup"</code> attribute on the container.</p>

		<div data-demo-html="true">
            <form>
            		<fieldset data-role="controlgroup">
					<legend>Vertical:</legend>
					<input type="radio" name="radio-choice-v-2" id="radio-choice-v-2a" value="on" checked="checked">
					<label for="radio-choice-v-2a">One</label>
					<input type="radio" name="radio-choice-v-2" id="radio-choice-v-2b" value="off">
					<label for="radio-choice-v-2b">Two</label>
					<input type="radio" name="radio-choice-v-2" id="radio-choice-v-2c" value="other">
					<label for="radio-choice-v-2c">Three</label>
				</fieldset>
        	</form>
		</div><!--/demo-html -->

		<h2>Horizontal group</h2>

		<p>To make a horizontal button set, add the <code> data-type="horizontal"</code> to the <code>fieldset</code>.</p>

		<div data-demo-html="true">
            <form>
				<fieldset data-role="controlgroup" data-type="horizontal">
					<legend>Horizontal:</legend>
					<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="on" checked="checked">
					<label for="radio-choice-h-2a">One</label>
					<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="off">
					<label for="radio-choice-h-2b">Two</label>
					<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2c" value="other">
					<label for="radio-choice-h-2c">Three</label>
				</fieldset>
        	</form>
		</div><!--/demo-html -->

		<h2>Mini size</h2>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

		<div data-demo-html="true">
            <form>
				<fieldset data-role="controlgroup" data-mini="true">
					<legend>Vertical, icon right, mini sized:</legend>
					<input type="radio" name="radio-choice-v-6" id="radio-choice-v-6a" value="on" checked="checked">
					<label for="radio-choice-v-6a">One</label>
					<input type="radio" name="radio-choice-v-6" id="radio-choice-v-6b" value="off">
					<label for="radio-choice-v-6b">Two</label>
					<input type="radio" name="radio-choice-v-6" id="radio-choice-v-6c" value="other">
					<label for="radio-choice-v-6c">Three</label>
				</fieldset>
        	</form>
		</div><!--/demo-html -->

		<h2>Icon position</h2>

		<p>To swap the position of the radio icon from the default position on the left, add the <code>data-iconpos="right"</code> attribute to the controlgroup.</p>

		<div data-demo-html="true">
            <form>
				<fieldset data-role="controlgroup" data-iconpos="right">
					<legend>Vertical, icon right:</legend>
					<input type="radio" name="radio-choice-w-6" id="radio-choice-w-6a" value="on" checked="checked">
					<label for="radio-choice-w-6a">One</label>
					<input type="radio" name="radio-choice-w-6" id="radio-choice-w-6b" value="off">
					<label for="radio-choice-w-6b">Two</label>
					<input type="radio" name="radio-choice-w-6" id="radio-choice-w-6c" value="other">
					<label for="radio-choice-w-6c">Three</label>
				</fieldset>
        	</form>
		</div><!--/demo-html -->

		<h2>Theme</h2>

		<p>To set the theme, add the <code>data-theme</code> attribute to the controlgroup or each of the individual checkbox inputs.</p>

		<div data-demo-html="true">
            <form>
            	<fieldset data-role="controlgroup" data-theme="b" data-type="horizontal">
					<legend>Horizontal:</legend>
					<input type="radio" name="radio-choice-t-6" id="radio-choice-t-6a" value="on" checked="checked">
					<label for="radio-choice-t-6a">One</label>
					<input type="radio" name="radio-choice-t-6" id="radio-choice-t-6b" value="off">
					<label for="radio-choice-t-6b">Two</label>
					<input type="radio" name="radio-choice-t-6" id="radio-choice-t-6c" value="other">
					<label for="radio-choice-t-6c">Three</label>
				</fieldset>
        	</form>
		</div><!--/demo-html -->

		<h2>Disabled</h2>

		<div data-demo-html="true">
			<form>
			    <label>
			        <input type="radio" name="radio-choice-7" id="radio-choice-7a" disabled="disabled">One
			    </label>
			    <label for="radio-choice-7b">Two</label>
			    <input type="radio" name="radio-choice-7" id="radio-choice-7b" disabled="disabled">
			</form>
		</div><!--/demo-html -->

		<h2>Enhanced</h2>

		<div data-demo-html="true">
			<div class="ui-radio">
				<label for="radio-enhanced" class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">I agree</label>
				<input type="radio" name="radio-enhanced" id="radio-enhanced" data-enhanced="true">
			</div>
		</div><!--/demo-html -->