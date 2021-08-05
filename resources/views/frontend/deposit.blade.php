@extends('layouts.logindash')

@section('content')
    <div class="hero">
    <div class="container">
      <div class="w-row">
        <div class="column-80 w-col w-col-8">
          <div class="div-block-6433">
            <div class="div-block-6434">
              <h5 class="heading-193">Balance totale<span class="text-span-242"></span></h5>
            </div>
            <div class="div-block-6435">
              <h3 class="heading-203">{{ Auth::user()->balance }} {{ Auth::user()->currency ?? '€' }}</h3>
            </div>
          </div>
          <div class="div-block-6432">
            <div data-duration-in="300" data-duration-out="100" class="tabs-22 w-tabs">
              <div class="tabs-menu-24 w-tab-menu">
                <a data-w-tab="Tab 2" class="tab-link-tab-2-28 w-inline-block w-tab-link w--current">
                  <div>Deposer</div>
                </a>
                <a data-w-tab="Tab 1" class="tab-link-tab-1-83 w-inline-block w-tab-link ">
                  <div>Retirer</div>
                </a>
               
              </div>
              <div class="tabs-content-21 w-tab-content">
                <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                  <div class="div-block-6436">
                    <p>Fait un virement depuis votre compte bancaire avec votre symbole variable. <br><br>Il est possible de déposer uniquement des Euros envoyées par l&#x27;une des <strong>banques européennes.</strong><br><br>Nous vous recommandons d&#x27;utiliser le paiement instantané de votre banque. <br><br>Avec un paiement régulier, l&#x27;argent arrivera dans les 48 heures en moyenne.</p>
                  </div>
                  <div class="div-block-6437">
                    <div class="div-block-6442">
                      <h5>Virement bancaire</h5>
                      <div class="text-block-563">xxxxxxxxxxx/xxxxx</div>
                      <div class="text-block-564">Compte bancaire</div>
                    </div>
                    <div class="div-block-6443">
                      <div class="text-block-567">QR CODE</div>
                    </div>
                  </div>
                </div>
                <div data-w-tab="Tab 2" class="w-tab-pane">
                  <div class="div-block-6444">
                    <div class="div-block-345">
                      <div class="w-form">
                        <form  data-name="Email Form 3" action="{{ route('mollie.payment') }}" method="POST">
                            @csrf
                          <h5 class="heading-40">1. Sélectionne la devise et le mode de paiement</h5>
                          <select id="field-3" name="currency" class="input-field w-select">
                            <option value="EUR">Euro</option>
                            <option value="GBP">Pound</option>
                          </select>
                      </div>
                    </div>
                    <div class="div-block-351">
                      <div>
                        <h5 class="heading-40">2. Détails du paiement</h5>
                      </div>
                      <div class="w-form">
                            <input type="text" class="input-field w-input" maxlength="256" name="amount" placeholder="Amount" id="amount">
                          <div class="div-block-567">
                            <div class="paragraph left"><span class="text-span-198">Frais de transaction :</span> 0.00 €</div>
                            <div class="paragraph left"><span class="text-span-199">Tu recevras :</span> <span id="rcv">0.00 €</span> </div>
                          </div>
                          <div class="div-block-352">
                              <input type="submit" value="Continuer"  class="button w-button"></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column-79 w-col w-col-4">
          <div class="div-block-6441">
            <div class="card_ghost_shadow">
              <div class="div-block-6439">
                <h4 class="h4_withoutpadding">Besoin d&#x27;aide?</h4>
                <div class="div-block-6446">
                  <div>
                      
                    <div class="div-block-6440"><img src="{{ asset('depo_assets/images/message-circle.svg') }}" loading="lazy" alt="" class="image-167">
                      <div class="text-block-566">Ouvrir le tchat</div>
                    </div>
                  </div>
                  <div>
                    <div class="div-block-6440"><img src="{{ asset('depo_assets/images/60dca32b27ab1d0f7948dab0_mail.svg') }}" loading="lazy" alt="" class="image-168">
                      <div class="text-block-566">help@b-hives.fr</div>
                    </div>
                  </div>
                  <div>
                    <div class="div-block-6440"><img src="{{ asset('depo_assets/images/whatsapp.jpg') }}" loading="lazy" width="20" alt="" class="image-166">
                      <div class="text-block-566">+xxx xxx xxx</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card_ghost_shadow">
              <h4 class="h4_withoutpadding">Aide / Faq</h4>
              <div class="div-block-6447">
                <p class="paragraph-45">‍<strong>Can I send money from an account that is not held in my name?<br>‍</strong>Unfortunately no. Money is only accepted from bank accounts held in your name.<br>‍<br>‍<strong>How can I withdraw my money?<br>‍</strong>Available money can be withdrawn at any time. Just open the Withdrawal section, enter the amount and choose the account to which you want to send the money.<br>‍<br>‍<strong>What if I enter wrong payment data?<br>‍</strong>If this happens, contact us as soon as possible. We will work together to identify your transaction and resolve the issue.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-bottom">
        <div class="w-layout-grid grid-55">
            
          <a href="dashboard.html" class="w-inline-block"><img src="{{ asset('depo_assets/images/60dca32b27ab1dae5648da31_bar-chart-2.svg') }}" loading="lazy" alt=""></a>
          <a href="make-a-deposit.html" aria-current="page" class="w-inline-block w--current"><img src="{{ asset('depo_assets/images/dollar-sign.svg') }}" loading="lazy" alt=""></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('depo_assets/images/60dca32b27ab1db1b948d78e_search.svg') }}" loading="lazy" width="30" alt=""></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('depo_assets/images/60dca32b27ab1d092448da94_heart.svg') }}" loading="lazy" alt=""></a>
          <a href="#" class="w-inline-block"><img src="{{ asset('depo_assets/images/60dca32b27ab1d93c348da3b_bell.svg') }}" loading="lazy" alt=""></a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
        $(document).ready(function (){
        
            $("#amount").keyup(function(){
                let value = $("#amount").val() + '.00 €'; 
                $("#rcv").text(value);
            });

        });
    </script>
@endsection