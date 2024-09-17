module.exports = {
    content: [
        // https://tailwindcss.com/docs/content-configuration
        "./*.php",
        "./inc/**/*.php",
        "./templates/**/*.php",
        "./components/**/*.php",
        "./components/contact/**/*.php",
        "./woocommerce/**/*.php",
        "./safelist.txt",
    ],
    safelist: ["text-center"],
    theme: {
        extend: {
            screens: {
                largeScreen: "1600px",
            },
            colors: {
                primary: "#ED5538",
                bannerBg: "#ed553833",
            },
            container: {
                center: true,
                // padding: { DEFAULT: "1rem", sm: "2rem", lg: "4rem", xl: "5rem", "2xl": "6rem" },
                padding: {
                    DEFAULT: "20px",
                },
                screens: {
                    sm: "100%",
                    md: "100%",
                    lg: "1024px",
                    xl: "1200px",

                    // "3xl": "1368px",
                    // largeScreen: "1536px",
                },
            },
        },
    },
};
