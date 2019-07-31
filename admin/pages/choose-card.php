<div class="container">

    <form method="post" action="print-card.php">


          <div class="col-md-6 border border-success">

              <form method="post">

                  <div class="row">

                      <div class="form-group col-md-6">
                          <label for="card Type">Card Type:</label>

                          <select name="card_type" class="select2 form-control">
                              <option value="">Select Card Type</option>
                              <option value="vc">Voter's  Card</option>
                              <option value="nic">National ID Card</option>
                              <option value="nacoss">NACOSS ID Card</option>
                              <option value="dsc">DSC ID Card</option>

                          </select>

                      </div>

                      <div class="col-md-6 form-group">
                          <label for="button"></label>

                          <button name="print_card" class="text-center btn btn-success form-control" type="submit">Print Card</button>

                      </div>

                  </div>

              </form>

          </div>

    </form>

</div>
