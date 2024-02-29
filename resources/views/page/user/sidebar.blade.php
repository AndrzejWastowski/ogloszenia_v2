<div class="col-12 col-lg-3 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-body">
            <div class="d-flex align-items-center mb-2">
                <h6 class="mb-0 font-22 sidebar_topic ">Menu</h6>
            </div>

            <a href="#submenu-1" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action {{ $sidebar == 'twoje_ogloszenia' ? 'active' : '' }}">
                Zarządzaj ogłoszeniami
            </a>
            <div class="collapse {{ $sidebar == 'twoje_ogloszenia' ?  'show' : '' }}" id="submenu-1">
                <div class="list-group">
                    <div class="row mb-1">
                        <div class="col">
                            <p class="mb-2">
                                <a href="{{ route('page.user.your_ads') }}" class="list-group-item-action">
                                    Lista Twoich ogłoszeń
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-1">
                      <div class="col">
                          <p class="mb-2">
                              <a href="{{ route('page.user.small_ads.content_form') }}" class="list-group-item-action">
                                    Dodaj "ogłoszenie drobne"
                              </a>
                          </p>
                      </div>
                    </div>
                    <div class="row mb-1">
                      <div class="col">
                          <p class="mb-2">
                              <a href="link" class="list-group-item-action">
                                    Dodaj "sprzedam samochód"
                              </a>
                          </p>
                      </div>
                    </div>
                    <div class="row mb-1">
                      <div class="col">
                          <p class="mb-2">
                              <a href="link" class="list-group-item-action">
                                    Dodaj "Sprzedam nieruchomość"
                              </a>
                          </p>
                      </div>
                    </div>
                    <div class="row mb-1">
                      <div class="col">
                          <p class="mb-2">
                              <a href="link" class="list-group-item-action">
                                    Dam pracę
                              </a>
                          </p>
                      </div>
                    </div>
                  <div class="row mb-1">
                    <div class="col">
                        <p class="mb-2">
                            <a href="link" class="list-group-item-action">
                                Obserwowane ogłoszenia
                            </a>
                        </p>
                    </div>
                </div>

                </div>
            </div>

        </div>
    </div>