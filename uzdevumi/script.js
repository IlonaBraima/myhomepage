let=name;
name=document.getElementById('upe').innerHTML;
console.log(name);

let x, y, z;
    x = 5 ;
    y = 10;
    z= x + y;
    console.log("Rezultāts ir: ", z);
    //window.alert("Rezultāts ir: ", z);
    let zeta=4.0245;
    console.log("Tips: ", typeof(zeta));
    let teksts="Rezultats ir: ";
    console.log(teksts, "", zeta);
    let auto=[];
    auto[0]="Audi";
    auto[1]="Alfa Romeo";
    let mo="Mocis ";
    let moto=["Suzuki", "Honda", "Kavasaki", "Ducati", 435];
    console.log("Teksta garums: ",teksts.length, "Masiva garums: ",moto.length );

    for (var i = 0; i < moto.length; i++) {
        moto[i]=mo+moto[i];
    }
console.log(moto);

    if (zeta*2<5) {
        console.log('Izpildas')
    }else{
        console.log("Neizpildas")
    }

    zero();

    function zero() {
        window.alert("Funkcija ZERO darbu pabeidza");
    }

    let cc=137;

function objektaGarums(objekts){
        console.log("Tips:", typeof(objekts), "Garums: ",objekts.length);
        cc=cc/objekts.length;
        return cc;
}

objektaGarums("Lacis");
console.log("1; ",objektaGarums(teksts));
console.log("2; ",objektaGarums(moto));

objektaGarums(teksts);
objektaGarums(moto);