module.exports = {
  purge: ["./vendor/badaso/linky-theme/src/resources/**/*.php"],
  content: [],

  plugins: [require("daisyui")],
  daisyui: {
    themes: ["light", "cupcake"],
  },
  theme: {
    extend: {
      fontFamily: {
        karla: "'Karla' , serif",
        inter: "'Inter', sans-serif",
      },
      fontSize: {
        s: ["12px", "14px"],
        sm: ["14px", "20px"],
        base: ["16px", "24px"],
        lg: ["24px", "29px"],
        xl: ["32px", "38px"],
      },

      borderRadius: {
        3: "3px",
      },
      colors: {
        primary: "#06bbd3",
        gray: {
          800: "#1f2937",
        },
      },

      zIndex: {
        "-1": "-1",
        60: "60",
        70: "70",
        80: "80",
        90: "90",
        100: "100",
      },
      maxWidth: {
        32: "8rem",
        52: "13rem",
      },
    },
  },
  container: {
    center: false,
    screens: {
      DEFAULT: "80%",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      lx: "1200px",
    },
  },
  variants: {
    extend: {
      backgroundColor: [
        "responsive",
        "dark",
        "group-hover",
        "focus-within",
        "hover",
        "focus",
        "disabled",
        "important",
      ],
      brightness: ["hover", "focus"],
      borderCollapse: ["responsive"],
      borderColor: [
        "responsive",
        "dark",
        "group-hover",
        "focus-within",
        "hover",
        "focus",
        "first",
        "last",
      ],
      borderOpacity: [
        "responsive",
        "dark",
        "group-hover",
        "focus-within",
        "hover",
        "focus",
      ],
      borderRadius: ["responsive", "hover", "group-hover", "first", "last"],
      borderStyle: ["responsive"],
      borderWidth: ["responsive", "first", "last"],
      boxShadow: [
        "responsive",
        "group-hover",
        "focus-within",
        "hover",
        "focus",
        "disabled",
      ],
      cursor: ["responsive", "disabled"],
      display: ["responsive", "hover", "group-hover", "first", "last"],
      inset: ["hover", "focus", "important"],
      margin: ["responsive", "first", "last"],
      opacity: [
        "responsive",
        "group-hover",
        "focus-within",
        "hover",
        "focus",
        "disabled",
      ],
      padding: ["responsive", "first", "last"],
      position: ["responsive", "important"],
      ringWidth: ["hover", "group-hover"],
      textColor: [
        "responsive",
        "dark",
        "group-hover",
        "focus-within",
        "hover",
        "focus",
        "disabled",
      ],
      userSelect: ["responsive", "disabled"],
      visibility: ["responsive", "hover", "group-hover"],
    },
  },
};


