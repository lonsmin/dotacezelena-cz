<template>
    <footer>
        <div class="foot container">
            <div class="row m0">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h6>Kontakty</h6>
                    <p style="margin: 5px">Ing. Michal Bajtalon<br /></p>

                    <span><i class="fa-solid fa-square-phone"></i>737 775 697</span><br />
                    <span><i class="fa-solid fa-square-envelope"></i>Michal@DotaceZelena.cz</span
                    ><br />
                    <a target="_blank" href="https://www.facebook.com/groups/5008057742615182">
                        <span
                            ><i class="fa-brands fa-facebook-square"></i> Dotace zelena
                            úsporám</span
                        ></a
                    ><br />
                    <span style="font-size: 0.7em; letter-spacing: 0.06em; margin: 15px"
                        >IČO: 09480374 | Neplátce DPH</span
                    ><br />
                    <span style="font-size: 0.7em; letter-spacing: 0.06em; margin: 15px"
                        >Plojharova 1890/11, 162 00, Praha&nbsp;6</span
                    >
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 dark-bg ha">
                    <h6>Po celých Čechách</h6>
                    <img
                        src="@/assets/img/Michal_Bajtalon_fotka.png"
                        alt="Michal Bajtalon"
                        class="foto1"
                    />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dark-bg2 ha va">
                    <img src="@/assets/img/mapa_cechy.png" alt="mapa Cechy" class="foto2" />
                </div>
            </div>
        </div>
        <div class="foot container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot-ad">
                <span class="ha">
                    2022 Marcel Lonsmín |&nbsp;<a
                        target="_blank"
                        href="https://www.Lonsmin.cz"
                        rel="noopener noreferrer "
                    >
                        www.Lonsmin.cz</a
                    >
                </span>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "TheFooter",
    components: {},
};
</script>

<style>
footer {
    background-color: #28a745;
    font-size: 1.5rem;
}
footer i:first-child {
    padding-top: 0;
}
footer i {
    padding: 0.7rem;
}
footer i:last-child {
    padding-top: 0rem;
}
.foot-ad {
    font-size: 1rem;
    line-height: 1rem;
    padding: 1%;
    margin: 0;
    font-family: "LeagueGothicRegular";
    background-color: #1c642c;
}
.foto1 {
    position: absolute;
    bottom: 0;
    width: 70%;
}
.sad {
    letter-spacing: 1;
}
.dark-bg {
    position: relative;
    height: 300px;
}
.dark-bg2 {
    position: flex;
}
h6 {
    text-transform: uppercase;
}
</style>
