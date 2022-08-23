<?php

namespace Database\Seeders\Badaso\LinkyTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Content\Models\Content;

class LinkyThemeContentsSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();
        try {
            $contents = [
                0 => [
                    'slug' => 'linky',
                    'label' => 'Linky',
                    'value' => '{
                          "navbarlink": {
                "name": "navbarlink",
                "label": "Navbar Link",
                "type": "group",
                "data": {
                    "logo": {
                        "name": "logo",
                        "label": "Logo",
                        "type": "image",
                        "data": "http://localhost:8000/storage/photos/1/gurusaham (1).png"
                    },
                    "titlelogo": {
                        "name": "titlelogo",
                        "label": "Title Logo",
                        "type": "text",
                        "data": "gurusaham"
                    }
                }
            },
            "listlink": {
                "name": "listlink",
                "label": "List Link",
                "type": "array",
                "data": [
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Gurusahamboot"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "Google Play"
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://play.google.com/store/apps/details?id=com.app_gurusaham",
                                "text": "Google Play"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Gurusahamboot"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "Telegram"
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://t.me/gurusaham_bot",
                                "text": "Telegram"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Download dan Daftar Gotrade Indonesia"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "Isikan Kode 666776 untuk mendapatkan $2 dan Akses Workshop Ekslusif Gurusaham"
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://heygotrade.com/id/referral?code=051690",
                                "text": "Gotrade"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Daftar/Buat Akun Philip Sekuritas"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://docs.google.com/forms/d/1hwMar4PuY0J064PZZb0VQ_1mQ867wo3E3vsEy9Ju8Sc/viewform?edit_requested=true",
                                "text": "Philip Sekuritas"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Daftar/Buat Akun Mirae Sekuritas"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://docs.google.com/forms/d/14PrEpsmvkdmYKCGiulR3U5Bypzok2UXJ9ZXDRA7oTLc/viewform?edit_requested=true",
                                "text": "Mirae Sekuritas"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Daftar/Buat Akun NH Korindo Sekuritas"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://docs.google.com/forms/d/18qCTpnlVofZnh4QOZa5AblqBccEcPqrGyNvOjFOb5-Q/viewform?edit_requested=true",
                                "text": "Korindo Sekuritas"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Channel Youtube Guru Saham"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://www.youtube.com/playlist?list=PLhreaFG367mMsG8Ih-XvpWueg15izIJ9b",
                                "text": "channel youtube"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Channel Telegram Guru Saham"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://t.me/gurusaham",
                                "text": "channel telegram"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Grup Diskusi Gurusaham"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://t.me/diskusigurusaham",
                                "text": "grup diskusi"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Merchandise"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://toko.ly/gurusaham/home",
                                "text": "merchandise"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Kaos CL vc TP Gen 1"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "*Open Pre-Order Hingga 28 Februari 2022\""
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://toko.ly/gurusaham/products/7625314/kaos-cl-vs-tp-gen-1",
                                "text": "kaos cl"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Official Website"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "gurusaham.com"
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://gurusaham.com/",
                                "text": "official website"
                            }
                        }
                    }
                ]
            }
                    }'
                ],
            ];



            foreach ($contents as $key => $content) {
                Content::where('slug', $content['slug'])->delete();
                Content::create($content);
            }

            DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
