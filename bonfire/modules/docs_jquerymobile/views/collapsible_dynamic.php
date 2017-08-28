
        <h1>Dynamic collapsible</h1>

        <p>This demo shows how you can dynamically add a collapsible to a collapsible set (accordion). It also shows how you can use the <code>expand</code> and <code>collapse</code> events to dynamically open or close a collapsible.</p>

        <div data-demo-html="true" data-demo-js="true">
            <button type="button" data-icon="gear" data-iconpos="right" data-mini="true" data-inline="true" id="add">Add</button>
            <button type="button" data-icon="plus" data-iconpos="right" data-mini="true" data-inline="true" id="expand">Expand last</button>
            <button type="button" data-icon="minus" data-iconpos="right" data-mini="true" data-inline="true" id="collapse">Collapse last</button>

            <div data-role="collapsibleset" data-content-theme="a" data-iconpos="right" id="set">
                <div data-role="collapsible" id="set1" data-collapsed="true">
                    <h3>Section 1</h3>
                    <p>I'm the collapsible content.</p>
                </div>
            </div>

        </div><!--/demo-html -->