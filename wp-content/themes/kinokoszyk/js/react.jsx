import React from 'react';
export default function KinoKoszyk() {
    return (
        <section className="w-full h-2/3 flex flex-col justify-center items-center bg-white-red poppins text-off-black">
            <div className="ml-28">
                <h1 className="text-3xl font-light text-wine">
                    Kino Koszyk p<span className="font-normal">hotography</span>
                </h1>
                <h2 className="text-9xl font-prata"> Photography </h2>
                <div className="w-1/2 mt-4">
                    <p className="text-xl">
                        En text för att lyfta nyfikenheten för besökarna att kika på Kino
                        Kosyzks tidigare event. Även en kort text om att informera besökarna
                        till att kika på Kinos facebook sida för mer information om “mindre
                        event”.
                    </p>
                </div>
            </div>
        </section>
    );
}
