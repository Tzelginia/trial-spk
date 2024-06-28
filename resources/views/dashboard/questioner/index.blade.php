@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Questioner</h1>
    </div>
    <div>
        <section class="fs-5 general">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    Pertanyaan General
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Semester Saat ini</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="5">
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Berapa IPK mu saat ini</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="3.75">
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa baik Anda dalam mengatur waktu dan
                            memotivasi diri sendiri untuk menyelesaikan tugas tanpa pengawasan langsung?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop1" value="option1"
                                checked>
                            <label class="form-check-label" for="generalop1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop2" value="option2">
                            <label class="form-check-label" for="generalop2">
                                Second default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop3" value="option3">
                            <label class="form-check-label" for="generalop3">
                                Second default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop4" value="option4">
                            <label class="form-check-label" for="generalop4">
                                Second default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop5" value="option5">
                            <label class="form-check-label" for="generalop5">
                                Second default radio
                            </label>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa siap anda melakukan program secara
                            tatap muka?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop1" value="1">
                            <label class="form-check-label" for="generalop1">
                                Sangat Tidak Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop2" value="2">
                            <label class="form-check-label" for="generalop2">
                                Tidak Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop3" value="3">
                            <label class="form-check-label" for="generalop3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop4" value="4">
                            <label class="form-check-label" for="generalop4">
                                Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="generalop" id="generalop5"
                                value="5">
                            <label class="form-check-label" for="generalop5">
                                Sangat Siap
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="fs-5 msib">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    Magang MSIB
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda terhadap
                            program magang?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstmsib" id="firstmsib1"
                                value="1">
                            <label class="form-check-label" for="firstmsib1">
                                Sangat Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstmsib" id="firstmsib2"
                                value="2">
                            <label class="form-check-label" for="firstmsib2">
                                Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstmsib" id="firstmsib3"
                                value="3">
                            <label class="form-check-label" for="firstmsib3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstmsib" id="firstmsib4"
                                value="4">
                            <label class="form-check-label" for="firstmsib4">
                                Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstmsib" id="firstmsib5"
                                value="5">
                            <label class="form-check-label" for="firstmsib5">
                                Sangat Tertarik
                            </label>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda terhadap
                            program magang?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondmsib" id="secondmsib1"
                                value="1">
                            <label class="form-check-label" for="secondmsib1">
                                Sangat Tidak Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondmsib" id="secondmsib2"
                                value="2">
                            <label class="form-check-label" for="secondmsib2">
                                Tidak Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondmsib" id="secondmsib3"
                                value="3">
                            <label class="form-check-label" for="secondmsib3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondmsib" id="secondmsib4"
                                value="4">
                            <label class="form-check-label" for="secondmsib4">
                                Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondmsib" id="secondmsib5"
                                value="5">
                            <label class="form-check-label" for="secondmsib5">
                                Sangat Siap
                            </label>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">seberapa yakin anda dengan kemampuan anda
                            yang relevan dengan bidang studi Anda?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="thirdmsib" id="thirdmsib1"
                                value="1">
                            <label class="form-check-label" for="thirdmsib1">
                                Sangat Tidak Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="thirdmsib" id="thirdmsib2"
                                value="2">
                            <label class="form-check-label" for="thirdmsib2">
                                Tidak Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="thirdmsib" id="thirdmsib3"
                                value="3">
                            <label class="form-check-label" for="thirdmsib3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="thirdmsib" id="thirdmsib4"
                                value="4">
                            <label class="form-check-label" for="thirdmsib4">
                                Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="thirdmsib" id="thirdmsib5"
                                value="5">
                            <label class="form-check-label" for="thirdmsib5">
                                Sangat Yakin
                            </label>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa siap anda melakukan kegiatan
                            magang?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fourthmsib" id="fourthmsib1"
                                value="1">
                            <label class="form-check-label" for="fourthmsib1">
                                Sangat Tidak Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fourthmsib" id="fourthmsib2"
                                value="2">
                            <label class="form-check-label" for="fourthmsib2">
                                Tidak Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fourthmsib" id="fourthmsib3"
                                value="3">
                            <label class="form-check-label" for="fourthmsib3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fourthmsib" id="fourthmsib4"
                                value="4">
                            <label class="form-check-label" for="fourthmsib4">
                                Siap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fourthmsib" id="fourthmsib5"
                                value="5">
                            <label class="form-check-label" for="fourthmsib5">
                                Sangat Siap
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fs-5 iisma">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    IISMA
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda terhadap
                            program IISMA?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstiisma" id="firstiisma1"
                                value="1">
                            <label class="form-check-label" for="firstiisma1">
                                Sangat Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstiisma" id="firstiisma2"
                                value="2">
                            <label class="form-check-label" for="firstiisma2">
                                Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstiisma" id="firstiisma3"
                                value="3">
                            <label class="form-check-label" for="firstiisma3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstiisma" id="firstiisma4"
                                value="4">
                            <label class="form-check-label" for="firstiisma4">
                                Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstiisma" id="firstiisma5"
                                value="5">
                            <label class="form-check-label" for="firstiisma5">
                                Sangat Tertarik
                            </label>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa yakin anda dengan kemampuan
                            berbahasa inggris baik itu reading, listening, maupun writing?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondiisma" id="secondiisma1"
                                value="1">
                            <label class="form-check-label" for="secondiisma1">
                                Sangat Tidak Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondiisma" id="secondiisma2"
                                value="2">
                            <label class="form-check-label" for="secondiisma2">
                                Tidak Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondiisma" id="secondiisma3"
                                value="3">
                            <label class="form-check-label" for="secondiisma3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondiisma" id="secondiisma4"
                                value="4">
                            <label class="form-check-label" for="secondiisma4">
                                Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondiisma" id="secondiisma5"
                                value="5">
                            <label class="form-check-label" for="secondiisma5">
                                Sangat Yakin
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="fs-5 sib">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    Studi Independen
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda terhadap
                            program Studi Independen?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstsib" id="firstsib1"
                                value="1">
                            <label class="form-check-label" for="firstsib1">
                                Sangat Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstsib" id="firstsib2"
                                value="2">
                            <label class="form-check-label" for="firstsib2">
                                Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstsib" id="firstsib3"
                                value="3">
                            <label class="form-check-label" for="firstsib3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstsib" id="firstsib4"
                                value="4">
                            <label class="form-check-label" for="firstsib4">
                                Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstsib" id="firstsib5"
                                value="5">
                            <label class="form-check-label" for="firstsib5">
                                Sangat Tertarik
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="fs-5 reguler">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    Reguler
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda terhadap
                            program perkuliahan reguler?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstreguler" id="firstreguler1"
                                value="1">
                            <label class="form-check-label" for="firstreguler1">
                                Sangat Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstreguler" id="firstreguler2"
                                value="2">
                            <label class="form-check-label" for="firstreguler2">
                                Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstreguler" id="firstreguler3"
                                value="3">
                            <label class="form-check-label" for="firstreguler3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstreguler" id="firstreguler4"
                                value="4">
                            <label class="form-check-label" for="firstreguler4">
                                Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstreguler" id="firstreguler5"
                                value="5">
                            <label class="form-check-label" for="firstreguler5">
                                Sangat Tertarik
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="fs-5 kwu">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    KWU
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda dalam belajar
                            berwirausaha?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstkwu" id="firstkwu1"
                                value="1">
                            <label class="form-check-label" for="firstkwu1">
                                Sangat Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstkwu" id="firstkwu2"
                                value="2">
                            <label class="form-check-label" for="firstkwu2">
                                Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstkwu" id="firstkwu3"
                                value="3">
                            <label class="form-check-label" for="firstkwu3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstkwu" id="firstkwu4"
                                value="4">
                            <label class="form-check-label" for="firstkwu4">
                                Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstkwu" id="firstkwu5"
                                value="5">
                            <label class="form-check-label" for="firstkwu5">
                                Sangat Tertarik
                            </label>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa yakin anda dengan kemampuan
                            berwirausaha yang anda miliki?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondkwu" id="secondkwu1"
                                value="1">
                            <label class="form-check-label" for="secondkwu1">
                                Sangat Tidak Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondkwu" id="secondkwu2"
                                value="2">
                            <label class="form-check-label" for="secondkwu2">
                                Tidak Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondkwu" id="secondkwu3"
                                value="3">
                            <label class="form-check-label" for="secondkwu3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondkwu" id="secondkwu4"
                                value="4">
                            <label class="form-check-label" for="secondkwu4">
                                Yakin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="secondkwu" id="secondkwu5"
                                value="5">
                            <label class="form-check-label" for="secondkwu5">
                                Sangat Yakin
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="fs-5 exchange">
            <div class="p-3 px-5">
                <h3 class="mb-5">
                    Pertukaran Pelajar
                </h3>
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Seberapa besar minat Anda terhadap
                            program Pertukaran Mahasiswa?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstexc" id="firstexc1"
                                value="1">
                            <label class="form-check-label" for="firstexc1">
                                Sangat Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstexc" id="firstexc2"
                                value="2">
                            <label class="form-check-label" for="firstexc2">
                                Tidak Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstexc" id="firstexc3"
                                value="3">
                            <label class="form-check-label" for="firstexc3">
                                Netral
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstexc" id="firstexc4"
                                value="4">
                            <label class="form-check-label" for="firstexc4">
                                Tertarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="firstexc" id="firstexc5"
                                value="5">
                            <label class="form-check-label" for="firstexc5">
                                Sangat Tertarik
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
