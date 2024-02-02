<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('pages')->insert([
        'name'=> 'Polityka Poprawności',
        'link' =>'polityka_poprawnosci',
        'lead'=>'Polityka pprawnosci storny Ogłoszenia',
        'description'=> '<p class="demoTitle"><strong>Polityka Prywatności</strong></p>
        <p><em>Data wejścia w życie: [data wejścia w życie]</em></p>
        <p style="text-align: justify;">Niniejsza Polityka Prywatności opisuje, jak [Nazwa Strony] ("my", "nasz") gromadzi, wykorzystuje i chroni Twoje informacje osobiste, gdy korzystasz z naszej strony internetowej [adres strony]. Przystępując do korzystania z naszej strony, wyrażasz zgodę na gromadzenie, używanie i udostępnianie Twoich informacji zgodnie z niniejszą polityką.</p>
        <p><strong>1. Jakie informacje zbieramy?</strong></p>
        <p style="text-align: justify;">Gromadzimy informacje, kt&oacute;re dostarczasz bezpośrednio, w tym, ale nie ograniczając się do: imienia i nazwiska, adresu e-mail, numeru telefonu, adresu, oraz informacji dotyczących ogłoszeń, takich jak opisy nieruchomości, samochod&oacute;w, ofert pracy, usług, produkt&oacute;w rolnych, a także informacji finansowych potrzebnych do przetwarzania płatności za dodatkowe usługi.</p>
        <p style="text-align: justify;">Ponadto, automatycznie zbieramy pewne informacje podczas Twoich odwiedzin na naszej stronie, takie jak adres IP, informacje o urządzeniu, statystyki dotyczące przeglądania, wzorce użytkowania poprzez cookies i inne technologie śledzące, w celu poprawy naszej strony oraz do cel&oacute;w reklamowych i analitycznych.</p>
        <p><strong>2. Jak wykorzystujemy Twoje informacje?</strong></p>
        <p>Twoje informacje są wykorzystywane do:</p>
        <ul>
        <li style="text-align: justify;">Zarządzania i publikacji Twoich ogłoszeń.</li>
        <li style="text-align: justify;">Świadczenia usług klienta i wsparcia.</li>
        <li style="text-align: justify;">Procesowania płatności za usługi dodatkowe.</li>
        <li style="text-align: justify;">Ulepszania naszej strony i personalizacji doświadczeń użytkownik&oacute;w.</li>
        <li style="text-align: justify;">Wysyłania komunikat&oacute;w marketingowych, o ile wyraziłeś na to zgodę.</li>
        <li style="text-align: justify;">Zapewnienia zgodności z obowiązującymi przepisami prawnymi.</li>
        </ul>
        <p><strong>3. Udostępnianie informacji</strong></p>
        <p style="text-align: justify;">Nie sprzedajemy, nie handlujemy ani nie wynajmujemy Twoich danych osobowych firmom zewnętrznym. Możemy udostępniać informacje zgodnie z wymogami prawnymi instytucjom rządowym lub organom ścigania.</p>
        <p><strong>4. Przechowywanie i bezpieczeństwo</strong></p>
        <p style="text-align: justify;">Zobowiązujemy się do ochrony Twoich danych. Stosujemy r&oacute;żnorodne środki bezpieczeństwa, aby zapewnić ochronę informacji przed nieuprawnionym dostępem, zmianą, ujawnieniem lub zniszczeniem. Twoje dane osobowe są przechowywane przez okres wymagany przez prawo i usuwane po upływie tego okresu.</p>
        <p><strong>5. Twoje prawa</strong></p>
        <p style="text-align: justify;">Masz prawo do dostępu, sprostowania, usunięcia swoich danych osobowych, ograniczenia ich przetwarzania, a także prawo do przenoszenia danych. Aby skorzystać z tych praw, skontaktuj się z nami.</p>
        <p><strong>6. Używanie cookies i podobnych technologii</strong></p>
        <p style="text-align: justify;">Nasza strona wykorzystuje cookies i podobne technologie do zbierania informacji o Twoim użytkowaniu strony i preferencjach. Możesz kontrolować i ograniczać cookies poprzez ustawienia swojej przeglądarki.</p>
        <p><strong>7. Logowanie przez Google i Facebook</strong></p>
        <p style="text-align: justify;">Umożliwiamy logowanie za pomocą kont Google i Facebook dzięki technologii OAuth 2.0. Nie kontrolujemy praktyk prywatności tych stron, zalecamy zapoznanie się z ich politykami prywatności.</p>
        <p><strong>8. Zmiany w polityce prywatności</strong></p>
        <p style="text-align: justify;">Zastrzegamy sobie prawo do wprowadzania zmian w niniejszej Polityce Prywatności. O wszelkich zmianach będziemy informować poprzez aktualizację daty wejścia w życie polityki na g&oacute;rze tej strony.</p>
        <p><strong>9. Wgląd w dane osobowe</strong></p>
        <p>Udostępniamy na stornie internetowej mechanizmy umożliwiające przejrzenie wszystkich zgromadzonych danych osobowych, ogłoszeń archiwalnych oraz informacji o logowaniach do urządzeń</p>
        <hr />
        <p><strong>10. Kontakt</strong></p>
        <p>W przypadku jakichkolwiek pytań dotyczących niniejszej Polityki Prywatności, prosimy o kontakt pod adresem [adres e-mail].</p>';

        ]);
    }
}
