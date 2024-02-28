<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="./favicon.png" />
    <meta name="generator" content={Astro.generator} />
    <meta name="description" content="Template built with tailwindcss using Tailus blocks v2" />
    <title>
        Finance Automation - Transforming Your Business, One Smart Step at a
        Time
    </title>

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">
    <?php include 'appheader.php'; ?>
    <div class="relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-blue-600 to-blue-400">
            </div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300">
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 mb-32">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-white font-bold text-5xl md:text-6xl xl:text-7xl">
                        Transforming Your Business, <span class="text-blue-600 dark:text-white">One Smart Step at a Time</span>
                    </h1>
                    <p class="mt-8 text-white">
                        Finance automation revolutionizes financial processes, using AI and ML
                        to eliminate manual tasks, boost productivity, and enhance focus on
                        critical functions like financial planning. Key areas benefiting
                        include AP, AR, spend management, and financial reporting.
                    </p>
                    <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                        <a href="documentation.php" class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-blue-600 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Get started</span>
                        </a>
                        <a href="more.php" class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-blue-600/10 before:border-white before:border-transparent before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Learn more</span>
                        </a>
                    </div>
                    <div class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                        <div class="text-left">
                            <div class="flex justify-center">
                                <img src="./images/icons/growth.png" alt="" />
                            </div>
                            <p class="mt-2 text-white">Reduced manual effort</p>
                        </div>
                        <div class="text-center">
                            <div class="flex justify-center">
                                <img src="./images/icons/accuracy.png" alt="" />
                            </div>
                            <p class="mt-2 text-white">Improved accuracy in financial processes</p>
                        </div>
                        <div class="text-right">
                            <div class="flex justify-center">
                                <img src="./images/icons/enhanced.png" alt="" class="w-24" />
                            </div>
                            <p class="mt-2 text-white">Enhanced operational</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features">
        <div class="max-w-7xl mx-auto px-6 mb-32 md:px-12 xl:px-6">
            <div class="md:w-full bg-white rounded-xl px-6 py-4">
                <img src="./images/assets/automation.gif" alt="" />
                <h2 class="my-8 text-2xl font-bold text-black relative md:text-4xl">
                    Account Payable Automation
                </h2>
                <div class="md:flex">
                    <p class="text-black text-xl tracking-wide mb-20">
                        With AP automation software or accounts payable software, you can
                        digitize invoices and automatically match to purchase orders, thereby
                        minimizing the need for manual checks or interventions. Invoice
                        automation and AP approval workflows can also be streamlined, ensuring
                        prompt payments and reducing the likelihood of late fees or penalties.
                        With real-time visibility into outstanding invoices, finance teams can
                        more effectively manage cash flow and make better decisions concerning
                        working capital. There are various steps in the source to pay workflow
                        that can be further automated.
                    </p>
                    <img src="./images/assets/approcess.png" alt="" class="md:h-96 lg:-mt-20 mb-4" />
                </div>
                <a href="apautomation.php" class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-black before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max">
                    <span class="relative text-base font-semibold text-black">Learn more</span>
                </a>
            </div>
            <div class="flex justify-center mb-6 mt-16 md:mb-16 md:mt-36">
                <h3 class="text-white font-bold text-center text-2xl md:text-4xl px-4 py-4 md:px-10 md:py-6 border-2 border-blue-600 rounded-full">
                    4 Way Matching
                </h3>
            </div>
            <div class="md:flex md:justify-around mb-10">
                <div class="flex justify-center">
                    <div class="w-max h-max flex justify-center items-center mb-6">
                        <div class="w-52 h-52 md:w-28 md:h-28 lg:w-40 lg:h-40 border-2 border-blue-600 rounded-full">
                        </div>
                        <img src="./images/assets/po.png" alt="" class="w-40 md:w-24 lg:w-32 absolute" />
                    </div>
                </div>
                <h3 class="font-semibold md:hidden text-white mb-10 text-center">
                    01. <span class="text-blue-600 font-bold">Purchasing Order</span>
                </h3>

                <div class="flex justify-center">
                    <div class="w-max h-max flex justify-center items-center mb-6">
                        <div class="w-52 h-52 md:w-28 md:h-28 lg:w-40 lg:h-40 border-2 border-blue-600 rounded-full">
                        </div>
                        <img src="./images/assets/do.jpg" alt="" class="w-40 md:w-24 lg:w-32 absolute" />
                    </div>
                </div>
                <h3 class="font-semibold md:hidden text-white mb-10 text-center">
                    02. <span class="text-blue-600 font-bold">Delivery Order</span>
                </h3>
                <div class="flex justify-center">
                    <div class="w-max h-max flex justify-center items-center mb-6">
                        <div class="w-52 h-52 md:w-28 md:h-28 lg:w-40 lg:h-40 border-2 border-blue-600 rounded-full">
                        </div>
                        <img src="./images/assets/invoice.png" alt="" class="w-40 md:w-24 lg:w-32 absolute" />
                    </div>
                </div>
                <h3 class="font-semibold md:hidden text-white mb-10 text-center">
                    03. <span class="text-blue-600 font-bold">Invoice</span>
                </h3>
                <div class="flex justify-center">
                    <div class="w-max h-max flex justify-center items-center mb-6">
                        <div class="w-52 h-52 md:w-28 md:h-28 lg:w-40 lg:h-40 border-2 border-blue-600 rounded-full">
                        </div>
                        <img src="./images/assets/form-faktur-pajak-2013.jpg" alt="" class="w-40 md:w-24 lg:w-32 absolute" />
                    </div>
                </div>
                <h3 class="font-semibold md:hidden text-white mb-10 text-center">
                    04. <span class="text-blue-600 font-bold">Tax Invoice</span>
                </h3>
                <div class="flex justify-center">
                    <div class="w-max h-max flex justify-center items-center mb-6">
                        <div class="w-52 h-52 md:w-28 md:h-28 lg:w-40 lg:h-40 border-2 border-blue-600 rounded-full">
                        </div>
                        <img class="w-28 absolute md:w-20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADh0lEQVR4nO2bTUtVQRjHr5KFErmIIkiK6EVt3aZF4LKXVbZVI7IMCyvD6rY6i0h7+QJCtYo2ZiZFEAVS+SEyMOgTVKvsRX/xwGjTeO517jlzzsyl84MDl3vnPjPP/zznmZln7i0BjUAvcM24LgAbSwZAKzAU097nJeNvLCUB6KMy4zHtHxImvUkFiGoUYIYwiVwIMAuMqes80LKGAI+19i4usbfMZ4v2s64FiCza6wJ0Jeq0su0uzfaM67E7MUIhAHoEjDvO5uP1FgFZEqwAD8iH+6EK0AoMO87+5nUZ2BSkACFRCEARAVHxCPylyAElb4nEE0UOoMgBUZEDQsgBwAngG8n4CnTXuwAvSMfzehegW93JJHwBjvsae6mYBinWAVHqMPJE8QhQ5ICzWvQO+AsjTwBNWkG16b8TwAkUAlA3EQDsAI6pk2v9FPuofJapAMDBDI615Zh92xrj2w/cAz5ZrCrngbtAp1MBgF3AT7LhTYU+24FnwFICm/KdKWCfKwF2Ar/IhldGX/KDjTKw4MD2goq0hlQCCMAh4KbjA5CrwFatjxbZGeKe6bij/qBmAeX8e7LjXawIBCCACvss7nxcJDSGKECZ/LgWlADAXkcJz5YfMsPUJACwQaarhFOSOU+3G7ZlqsubyVoFOOCw8xvGIietqJX4XeWzRaCjFgHWAy/XMGrDHLBbsysrPNeIoBdVYtW3yyZj1gJkheXythbkzp7R7K+rctM+ehVAbWxcO99v9CGRUI02nwLIrs5l2J8z7PcrUapx2KcAso214YOcG6hleFzCFCdPGbYHLJPrYJ7b4dPyTCZY/KwcmsiADcfE+ZMJnRfKeW+HryQQ4JYxliHloCS3vhTOC+W8t8PDmk35MbYNS2bFF7gE9KR0XhjMczvcbzwCtSTBVSI4cF44Uk/TYKwIKZwXtvteCM2nESGl83PLRnwKcCfBwMXhR+rPFWn2EaMhCNCZ4WaoGosru1L81wOkeps3E/oAogAKIt9zdH7hn3I5YZTEZKWYFyNm51EAAjSqgmXWTK06IyAAAbSyuJSus+It0BzXcRSCAJoI0xnd+eZKnUZaw9ce/vcrRYvN2nga1PsuKsWSXEdqORrzxZMKs8OkRVEjDvnOBLDHJux68c/TKuPrAG5LDc+y6Dpqlt5tMnBPxv8Cq3ZdB7ZYjrVNyliqMLL8CMlrea/N2mmNPz9GqucycGvhAAAAAElFTkSuQmCC" />
                    </div>
                </div>
                <h3 class="font-semibold md:hidden text-white mb-10 text-center">
                    05. <span class="text-blue-600 font-bold">Validate</span>
                </h3>
            </div>
            <div class="md:flex hidden lg:justify-around">
                <h3 class="font-semibold text-sm text-blue-600 mb-10 pr-4 lg:pr-0 lg:text-xl lg:-ml-10">
                    01. <span class="text-white font-bold">Purchasing Order</span>
                </h3>
                <h3 class="font-semibold text-sm text-blue-600 mb-10 pr-10 lg:pr-0 lg:text-lg lg:-ml-20">
                    02. <span class="text-white font-bold">Delivery Order</span>
                </h3>
                <h3 class="font-semibold text-sm text-blue-600 mb-10 pr-16 lg:pr-0 lg:text-lg lg:-ml-20">
                    03. <span class="text-white font-bold">Invoice</span>
                </h3>
                <h3 class="font-semibold text-sm text-blue-600 mb-10 pr-12 lg:pr-0 lg:text-lg lg:-ml-10">
                    04. <span class="text-white font-bold">Tax Invoice</span>
                </h3>
                <h3 class="font-semibold text-sm text-blue-600 mb-10 lg:pr-0 lg:text-lg lg:-ml-6">
                    05. <span class="text-white font-bold">Validate</span>
                </h3>
            </div>

            <div class="flex justify-center mb-6 mt-16 md:mb-16 md:mt-36 px-4 py-4 md:px-4 md:py-6 border border-white rounded-full items-center">
                <h3 class="text-white font-bold text-center text-2xl md:text-4xl">
                    Automate with AI
                </h3>
            </div>
            <h1 class="text-white font-normal text-lg md:text-xl xl:text-xl mb-10 tracking-wide">
                With AP automation software or accounts payable software, you
                can digitize invoices and automatically match to purchase
                orders, thereby minimizing the need for manual checks or
                interventions. Invoice automation and AP approval workflows can
                also be streamlined, ensuring prompt payments and reducing the
                likelihood of late fees or penalties. With real-time visibility
                into outstanding invoices, finance teams can more effectively
                manage cash flow and make better decisions concerning working
                capital. There are various steps in the source to pay workflow
                that can be further automated.
            </h1>
            <img src="./images/assets/clai.gif" alt="" class="rounded-2xl">
        </div>
    </div>

    <div id="solution">
        <div class="max-w-7xl mx-auto mb-32 px-6 md:px-12 xl:px-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sky-500">
                <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
            </svg>

            <div class="space-y-6 justify-between text-gray-600 lg:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
                <div class="lg:w-1/2 flex justify-center mb-10 lg:flex lg:justify-end">
                    <img src="./images/assets/percentage.png" alt="image" loading="lazy" width="" height="" class="h-40 md:h-52" />
                </div>
                <div class="md:7/12 lg:w-1/2 md:mt-10">
                    <h2 class="text-3xl font-bold text-white tracking-wide md:text-4xl">
                        50% of B2B payment activities worldwide will be processed and carried out automatically without manual intervention
                    </h2>
                    <p class="my-8 text-blue-600 dark:text-gray-300">
                        50% of business-to-business invoices worldwide will be processed and paid without manual intervention
                    </p>
                </div>
            </div>

            <div
      class="flex justify-center mb-6 mt-16 md:mb-16 md:mt-36 px-4 py-4 md:px-4 md:py-6 border border-white rounded-full items-center"
    >
      <h3 class="text-white font-bold text-center text-2xl md:text-4xl">
        Why users love Finance Automation
      </h3>
    </div>
    <div class="flex justify-center">
      <table>
        <thead>
          <tr>
            <td class="border border-white"
              ><h3 class="text-white text-lg md:text-4xl py-4 px-4">
                Features
              </h3>
            </td>
            <td class="border border-white flex justify-center items-center"
              ><img
                src="./images/clients/logo.svg"
                alt=""
                class="w-40 h-40 md:w-16 px-4 py-4"
              /><h3 class="hidden md:flex text-white text-lg md:text-4xl py-4 pr-4">
                Finance Automation
              </h3>
            </td>
            <td class="border border-white"
              ><h3 class="text-white text-lg md:text-4xl py-4 px-4">
                Traditional OCR
              </h3>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-white"
              ><h3 class="text-white text-sm md:text-4xl py-4 px-4">
                Data Formatting
              </h3>
            </td>
            <td class="border border-white"
              ><span
                class="material-symbols-outlined text-green-600 text-lg md:text-6xl py-4 flex justify-center"
              >
                done
              </span>
            </td>
            <td class="border border-white"><span class="material-symbols-outlined text-red-600 text-lg md:text-6xl py-4 flex justify-center"> close</span></td>
          </tr>
          <tr>
            <td class="border border-white"
              ><h3 class="text-white text-sm md:text-4xl py-4 px-4">
                Self-learning AI
              </h3>
            </td>
            <td class="border border-white"
              ><span
                class="material-symbols-outlined text-green-600 text-lg md:text-6xl py-4 flex justify-center"
              >
                done
              </span>
            </td>
            <td class="border border-white"><span class="material-symbols-outlined text-red-600 text-lg md:text-6xl py-4 flex justify-center"> close</span></td>
          </tr>
          <tr>
            <td class="border border-white"
              ><h3 class="text-white text-sm md:text-4xl py-4 px-4">
                Cost and Time Savings
              </h3>
            </td>
            <td class="border border-white"
              ><span
                class="material-symbols-outlined text-green-600 text-lg md:text-6xl py-4 flex justify-center"
              >
                done
              </span>
            </td>
            <td class="border border-white"><span class="material-symbols-outlined text-red-600 text-lg md:text-6xl py-4 flex justify-center"> close</span></td>
          </tr>
          <tr>
            <td class="border border-white"
              ><h3 class="text-white text-sm md:text-4xl py-4 px-4">
                Amount of training data needed
              </h3>
            </td>
            <td class="border border-white"
              >
              <span class="material-symbols-outlined text-red-600 text-lg md:text-6xl py-4 flex justify-center"> close</span>
            </td>
            <td class="border border-white"><span
              class="material-symbols-outlined text-green-600 text-lg md:text-6xl py-4 flex justify-center"
            >
              done
            </span></td>
          </tr>
        </tbody>
      </table>
    </div>
        </div>

        
    </div>

    <div class="text-gray-600 dark:text-gray-300" id="testimonials">
        <div class="max-w-7xl mb-32 mx-auto px-6 md:px-12 xl:px-6">
            <div class="w-full h-max mt-20 flex justify-center items-center mb-4 md:mt-32">
                <h2 class="text-center text-2xl font-bold text-white tracking-wide md:text-4xl">
                    Some Of Our Satisfied <span class="bg-blue-600 px-1 py-1">Customers</span>
                </h2>
            </div>
            <div class="w-full h-max grid justify-items-center gap-2 pl-6 py-5 mb-12 px-6 md:flex md:justify-center md:items-center md:gap-8 lg:gap-16 lg:flex lg:justify-center lg:items-center">
                <div class="p-4 flex">
                    <img src="./images/clients/kraftheinz.png" class="h-10 w-60 m-auto cursor-pointer" loading="lazy" alt="client logo" width="" height="" />
                </div>
                <div class="p-4">
                    <img src="./images/clients/ubcmedical.png" class="h-28 w-[6.7rem] m-auto cursor-pointer" loading="lazy" alt="client logo" width="" height="" />
                </div>
                <div class="p-4 flex">
                    <img src="./images/clients/bkpm.png" class="h-28 w-48 m-auto cursor-pointer" loading="lazy" alt="client logo" width="" height="" />
                </div>
                <div class="p-4">
                    <img src="./images/clients/umilia.png" class="h-32 w-24 m-auto cursor-pointer" loading="lazy" alt="client logo" width="" height="" />
                </div>
            </div>
            <div class="mb-20 space-y-4 px-6 md:px-0">
                <h2 class="text-center text-2xl font-bold text-white tracking-wide md:text-4xl">
                    Share Your Love Here
                </h2>
            </div>
            <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">
            <div class="aspect-auto p-8 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                    <div class="flex gap-4">
                        <img class="w-12 h-12 border border-blue-600 rounded-full" src="./images/avatars/avatar-1.svg" alt="user avatar" width="200" height="200" loading="lazy" />
                        <div>
                            <h6 class="text-lg font-medium text-gray-700 dark:text-white">
                                Agung Santoso
                            </h6>
                            <p class="text-sm text-gray-500 dark:text-gray-300">
                                Head of finance operations and treasury (Indonesia and
                                south east asia) - <span class="text-blue-600">ABC Heinz</span>
                            </p>
                        </div>
                    </div>
                    <p class="mt-8">
                        Sentosa help us in reducing manual process to creates more added value
                        activity by leveraging technologies through AP automation for
                        continuous improvement.
                    </p>
                </div>
                <div class="aspect-auto p-8 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                    <div class="flex gap-4">
                        <img class="w-12 h-12 border border-blue-600 rounded-full" src="./images/avatars/avatar-1.webp" alt="user avatar" width="200" height="200" loading="lazy" />
                        <div>
                            <h6 class="text-lg font-medium text-gray-700 dark:text-white">
                                Jane doe
                            </h6>
                            <p class="text-sm text-gray-500 dark:text-gray-300">Marketing - <span class="text-blue-600">PT XYZ</span></p>
                        </div>
                    </div>
                    <p class="mt-8">
                        Sentosa help us to training our staff. thank you Sentosa.
                    </p>
                </div>
                <div class="aspect-auto p-8 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                    <div class="flex gap-4">
                        <img class="w-12 h-12 border border-blue-600 rounded-full" src="./images/avatars/avatar.svg" alt="user avatar" width="200" height="200" loading="lazy" />
                        <div>
                            <h6 class="text-lg font-medium text-gray-700 dark:text-white">
                                Afrizal Rajab
                            </h6>
                            <p class="text-sm text-gray-500 dark:text-gray-300">
                                Senior Information Technology - <span class="text-blue-600">UBC Medical Indonesia</span>
                            </p>
                        </div>
                    </div>
                    <p class="mt-8">
                        Excellent service. Quick response, efficient troubleshooting and
                        resolution with full explanation of the problem. Gotta love Sentosa!
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="relative py-16 mt-20">
        <div aria-hidden="true" class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mb-32 md:px-12 xl:px-6">
            <div class="relative">
                <div class="flex items-center justify-center -space-x-2">
                    <img loading="lazy" width="400" height="400" src="./images/avatars/avatar.svg" alt="member photo" class="h-8 w-8 rounded-full object-cover" />
                    <img loading="lazy" width="200" height="200" src="./images/avatars/avatar-1.svg" alt="member photo" class="h-12 w-12 rounded-full object-cover" />
                    <img loading="lazy" width="200" height="200" src="./images/avatars/avatar-1.webp" alt="member photo" class="h-8 w-8 rounded-full object-cover" />
                </div>
                <div class="mt-6 m-auto space-y-6 md:w-8/12 lg:w-7/12">
                    <h1 class="text-center text-4xl font-bold text-white md:text-5xl">Join Now</h1>
                    <p class="text-center text-xl text-white">
                        Be part of millions people around the world using financeautomation.id.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="./server/form.php" class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:bg-blue-600 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Join Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blog">
        <div class="max-w-7xl mx-auto px-6 mt-20 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-blue-600">Our Latest Technology</h2>
                <p class="lg:mx-auto lg:w-6/12 text-white">
                    We will continue to build innovation and technology to facilitate your business needs
                </p>
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            </div>
            <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                <div class="relative overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80" alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                </div>
                <div class="mt-6 relative">
                    <h3 class="text-2xl font-semibold text-black">
                        AP Automation
                    </h3>
                    <p class="mt-6 mb-8 text-white">
                        Accounts Payable Automation, often referred to as AP Automation, employs technology and software to manage and streamline the accounts payable function within an organization.
                    </p>
                    <a class="inline-block" href="apautomation.php">
                        <span class="text-info hover:bg-blue-600 duration-300 text-white px-2 py-2 border border-blue-600 rounded-full">Read more</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    <?php include 'appfooter.php'; ?>
</body>

</html>
<style>
    html {
        font-family: Urbanist, sans-serif;
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
    }
</style>