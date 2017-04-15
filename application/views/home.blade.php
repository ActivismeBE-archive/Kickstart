<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Activisme | Tom Manhaeghe - {{ $title }}</title>
        <link rel="stylesheet" href="{{ base_url('assets/css/header.css') }}"/>
        <link rel="stylesheet" href="{{ base_url('assets/css/footer.css') }}"/>
        <link rel="stylesheet" href="{{ base_url('assets/css/index.css') }}"/>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="{{ base_url() }}">Home</a></li>
                    <li><a href="mailto:info@activisme.be">Contact</a></li>

                    @if ($this->user)
                        <li><a href="{{ base_url('backend') }}">Back-end</a></li>
                        <li><a href="{{ base_url('authencation/logout') }}">Uitloggen</a></li>
                    @else
                        <li><a href="{{ base_url('authencation/login') }}">Log-in</a></li>
                        <li><a href="{{ base_url('authencation/register') }}">Register</a></li>

                    @endif
                </ul>
            </nav>
            <section>
                <h1>ACTIVISME_BE</h1>
                <h3>TOM MANHAEGHE</h3>
            </section>
        </header>

        <main>
            <section class="informatie">
                <h1>Over ons</h1>
                <section>
                    <h2>Wie zijn we?</h2>
                    <ul>
                        <li>We zijn een klein team die opkomt voor wereldvrede en de rechten van de mens en het kind.</li>
                        <li>Wij Zijn actief zowel met web acties als met acties op straat en ludieke vredes acties.</li>
                        <li>Ons platform bestaat uit een klein heel actief team, allemaal vrijwilligers die zich 100% inzetten voor de vele dingen waarvoor we moeten strijden.</li>
                        <li>Wij zijn onafhankelijk van politieke organisaties en andere!</li>
                        <li>Wij worden in leven gehouden door vrijwilligers , eigen financiële inbreng en door giften van mensen die onze organisatie steunen.</li>
                    </ul>
                </section>
                <section>
                    <h2>Wat doen we?</h2>
                    <ul>
                        <li>Onze bedoeling is om zowel mensen als organisaties samen te brengen om te strijden voor de belangen van de rechten van de mens en het kind!</li>
                        <li>Op gebied van internet maken we petities op, eventuele andere online acties met dank aan ons web-team. En die bieden we ook gratis aan voor organisaties die dit willen.</li>
                        <li>Naast activisme hebben we ook een beweging die voedsel, kledij en dringende benodigdheden inzamelt voor de armen, daklozen en mensen in nood. </li>
                        <li>Wij bieden ook educatieve momenten aan zoals lezingen , vergaderingen enz….</li>
                    </ul>
                </section>
            </section>

            <section class="acties">
                <h1>Acties</h1>
                <section>
                    <h2>Petities</h2>
                    <ul>
                        <li><a href="http://www.zorgsector.activisme.be/" target="blank">PETITIE ZORGSECTOR</a></li>
                        <li><a href="http://www.begrotingstekort.activisme.be/" target="blank">PETITIE BEGROTINGSTEKORT</a></li>
                    </ul>
                </section>
                <section>
                    <h2>Mailingacties</h2>
                    <ul>
                        <li><a href="http://www.armoede.activisme.be/" target="blank">MAILINGACTIE ARMOEDE</a></li>
                    </ul>
                </section>
                <section>
                    <h2>Manifestaties</h2>
                    <ul>
                        <li><a href="#">ONZE AGENDA</a></li>
                    </ul>
                </section>
                <section>
                    <h2>Crowdfund</h2>
                    <ul>
                        <li><a href="{{ base_url('crowdfund') }}" target="blank">BEDEEL CARAVAN</a></li>
                    </ul>
                </section>
            </section>

            <section class="agenda">
                <h1>Nieuws en updates</h1>
                <section>
                    <h2>Wij maken een bedeel caravan</h2>
                    <p>
                        Met een overheid die steeds minder gul datgene steunt wat veel steun nodig heeft, wordt crowdfunding de enige uitweg. We zijn een tijdje geleden gestart met een caravan, die het land afreist als mobiel inzamelpunt voor kledij, dekens, voedsel, dat we dan uitdelen aan daklozen.
                        <br><br>
                        Het effect van dit initiatief is enorm: we maken echt het verschil voor mensen die volledig achtergelaten zijn door een kouder wordende overheid. En terwijl dit een relatief goedkope operatie is, kost ze niettemin een beetje geld. de caravan moet hersteld en her aangekleed worden, en de hele operatie breidt zich voortdurend uit.
                        <br><br>
                        We hebben dan ook jullie steun nodig. En zelfs kleine giften helpen. Ze maken bovendien een direct verschil. Ze tonen bovendien aan dat deze samenleving weigert mee te lopen in een beleid dat steeds meer mensen naar de marge verwijst. Niet alleen wij zijn jullie daarvoor dankbaar.
                    </p>
                    <p>
                        Ga naar de <a href="html/crowdfund.html" target="blank">crowdfund pagina</a> voor meer informatie.
                    </p>
                </section>
            </section>
        </main>

        <footer>
            <section>
                <h1>Information</h1>
                <section>
                    <h2>Share</h2>
                    <nav>
                        <ul>
                            <li><a href="http://www.facebook.com/share.php?u=http://www.activisme.be&title=activisme.be">FACEBOOK</a></li>
                            <li><a href="http://twitter.com/intent/tweet?status=activisme.be+http://www.activisme.be">TWITTER</a></li>
                            <li><a href="http://www.activisme.be">LINKEDIN</a></li>
                            <li><a href="https://plus.google.com/share?url=http://www.activisme.be">GOOGLEPLUS</a></li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <h2>Follow</h2>
                    <nav>
                        <ul>
                            <li><a href="https://www.facebook.com/ActivismeBE/" target="blank">FB ACTIVISME</a></li>
                            <li><a href="https://twitter.com/Activisme_be" target="blank">TWITTER ACTIVISME</a></li>
                            <li><a href="https://www.facebook.com/tom.manhaeghe.game" target="blank">FB TOM MANHAEGHE</a></li>
                            <li><a href="https://twitter.com/manhaeghe" target="blank">TWITTER TOM MANHAEGHE</a></li>
                            <li><a href="https://www.flickr.com/photos/activisme/" target="blank">FLICKR</a></li>
                            <li><a href="https://www.youtube.com/channel/UCVL0CgcRZu8fgCKad5Mi9WA" target="blank">YOUTUBE</a></li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <h2>Links</h2>
                    <nav>
                        <ul>
                            <li><a href="http://www.intal.be/" target="blank">INTAL</a></li>
                            <li><a href="https://www.vrede.be/" target="blank">VREDE.BE</a></li>
                            <li><a href="https://www.vredesactie.be/" target="blank">VREDESACTIE.BE</a></li>
                            <li><a href="http://www.hartbovenhard.be/" target="blank">HART BOVEN HARD</a></li>
                            <li><a href="http://www.solidarityforall.be" target="blank">SOLIDARITY FOR ALL</a></li>
                            <li><a href="https://www.amnesty-international.be" target="blank">AMNESTY INTERNATIONAL</a></li>
                        </ul>
                    </nav>
                </section>
            </section>
            <p><strong>Copyright &copy; activisme_be 2016</strong></p>
        </footer>
    </body>
</html>
