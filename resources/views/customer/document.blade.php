@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Customer documents
@endsection

@section('content')
<div class="register-wrap">
    <div class="container">
      <div class="form-wrapper">
        <div class="form-base">
          <h3 class="plain-h3">Nouveau compte</h3>
          <div class="step-register">Etape 3/3</div>
          <div class="w-form">
            <form id="wf-form-Register-Form" action="{{ route('customer.doc') }}" data-name="Register Form" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-wrap">
                  <input type="text" class="input-field w-input" maxlength="256" name="pid" data-name="Numéro d&#x27;identification personnel" placeholder="Numéro d&#x27;identification personnel" id="Num-ro-d-identification-personnel" required="">
                  @error('pid')
                      <small style="color:red">{{ $message }}</small>
                  @enderror
                </div>
              <div class="form-wrap">
                <div class="paragraph center">Veuillez joindre le document relatif à ce numéro. Il ne peut s&#x27;agir que de l&#x27;un des documents suivants : <span class="text-span-230">Passeport, Carte d&#x27;identité, Permis de conduire</span></div>
              </div>
              <div class="form-wrap">
                <div id="w-node-b00f87a7-dbcc-a87d-6524-9714e88409e5-e88409e5" class="form-attach-wrap">
                  <a id="btn" class="attach-link w-inline-block">
                    <div class="text-block-264"></div>
                    <div class="text-block-80">Pièce jointe</div>
                  </a>
                  <input type="file" style="display: none" id="doc" name="doc">
                  <script>
                      document.getElementById('btn').addEventListener('click', function() {
                            document.getElementById('doc').click();
                      }); 
                  </script>
                
                  <div class="paragraph">Taille Maximum: 10MB</div>
                </div>
                <div id="file-upload-filename"></div>
                <script>
                  var input = document.getElementById( 'doc' );
                  var infoArea = document.getElementById( 'file-upload-filename' );

                  input.addEventListener( 'change', showFileName );

                  function showFileName( event ) {
                    
                    // the change event gives us the input it occurred in 
                    var input = event.srcElement;
                    
                    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                    var fileName = input.files[0].name;
                    
                    // use fileName however fits your app best, i.e. add it into a div
                    infoArea.textContent = 'File name: ' + fileName + ' has been uploaded.';
                  }
                </script>
                @error('doc')
                     <small style="color: red">{{ $message }}</small>
                @enderror
              </div><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input required type="checkbox" id="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="paragraph w-form-label">J&#x27;accepte le traitement des <a href="../legal/privacy.html" class="link-30">données personnelles</a></span>
              </label><input type="submit" value="Continuer" class="button-submit w-button">
            </form>
            <div class="success-message w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection