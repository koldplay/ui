<div id="section4">
	<div class="bs-docs-section">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1 id="forms">Forms</h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
              <legend>Legend</legend>
              <div class="form-group is-empty">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>

                <div class="col-md-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group is-empty">
                <label for="inputPassword" class="col-md-2 control-label">Password</label>

                <div class="col-md-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">

                  <!--
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Checkbox
                    </label>
                    <label>
                      <input type="checkbox" disabled> Disabled Checkbox
                    </label>
                  </div>
                  <br>

                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked> Toggle button
                    </label>
                  </div>
                  -->
                </div>
              </div>
              <div class="form-group" style="margin-top: 0;"> <!-- inline style is just to demo custom css to put checkbox below input above -->
                <div class="col-md-offset-2 col-md-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="checkbox-material"><span class="check"></span></span> Checkbox
                    </label>
                    <label>
                      <input type="checkbox" disabled=""><span class="checkbox-material"><span class="check"></span></span> Disabled Checkbox
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked=""><span class="toggle"></span> Toggle button
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group is-empty is-fileinput">
                <label for="inputFile" class="col-md-2 control-label">File</label>

                <div class="col-md-10">
                  <input type="text" readonly="" class="form-control" placeholder="Browse...">
                  <input type="file" id="inputFile" multiple="">
                </div>
              </div>
              <div class="form-group is-empty">
                <label for="textArea" class="col-md-2 control-label">Textarea</label>

                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="textArea"></textarea>
                  <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Radios</label>

                <div class="col-md-10">
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="circle"></span><span class="check"></span>
                      Option one is this
                    </label>
                  </div>
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><span class="circle"></span><span class="check"></span>
                      Option two can be something else
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="select111" class="col-md-2 control-label">Select</label>

                <div class="col-md-10">
                  <select id="select111" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="select222" class="col-md-2 control-label">Select Multiple</label>

                <div class="col-md-10">
                  <select id="select222" multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="button" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        <div id="source-button" class="btn btn-primary btn-xs" style="display: block;">&lt; &gt;</div></div>
      </div>
      <div class="col-md-4 col-md-offset-1">

        <form class="bs-component">
          <div class="form-group label-floating is-empty">
            <label class="control-label" for="focusedInput1">Write something to make the label float</label>
            <input class="form-control" id="focusedInput1" type="text">
          </div>

          <div class="form-group label-floating is-empty">
            <label class="control-label" for="focusedInput2">Focus to show the help-block</label>
            <input class="form-control" id="focusedInput2" type="text">
            <p class="help-block">You should really write something here</p>
          </div>

          <div class="form-group is-empty">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
          </div>

          <div class="form-group has-warning is-empty">
            <label class="control-label" for="inputWarning">Input warning</label>
            <input type="text" class="form-control" id="inputWarning">
          </div>

          <div class="form-group has-error is-empty">
            <label class="control-label" for="inputError">Input error</label>
            <input type="text" class="form-control" id="inputError">
          </div>

          <div class="form-group has-success is-empty">
            <label class="control-label" for="inputSuccess">Input success</label>
            <input type="text" class="form-control" id="inputSuccess">
          </div>

          <div class="form-group form-group-lg is-empty">
            <label class="control-label" for="inputLarge">Large input</label>
            <input class="form-control" type="text" id="inputLarge">
          </div>

          <div class="form-group is-empty">
            <label class="control-label" for="inputDefault">Default input</label>
            <input type="text" class="form-control" id="inputDefault">
          </div>

          <div class="form-group form-group-sm is-empty">
            <label class="control-label" for="inputSmall">Small input</label>
            <input class="form-control" type="text" id="inputSmall">
          </div>



        </form>

      </div>
    </div>
  </div>          
</div> 