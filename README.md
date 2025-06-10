# AddressGoogle 🗺️

A lightweight JavaScript utility for validating and selecting addresses using the Google Maps Geocoding API.

---

## 🚀 Features

- Converts free-form address inputs into structured geolocation data (JSON).
- Prompts users to confirm the correct address when multiple results are returned.
- Renders selectable address options in a clean list.
- Centers a Google Map on the user’s selected address.

---

## 🛠️ Installation & Usage

1. Include the script in your HTML:
    ```html
    <script src="path/to/addressGoogle.js"></script>
    <script>
      addressToJson('123 Main Street, Some City', function(data) {
        // Use the returned Geocoder JSON here
      });
    </script>
    ```

2. To display multiple address options and let users pick one:
    ```javascript
    googleStringInit('123 Main Street, Some City');
    ```

3. The map and UI will auto-render and handle prompt markers seamlessly.

---

## 📋 How It Works

1. **Geocode** – `addressToJson()` calls Google’s geocoding service.
2. **List Rendering** – Possible address options are displayed in a clickable list.
3. **User Confirmation** – A prompt marker appears on the map asking "Is this the correct address?" (yes/no).
4. **Final Selection** – On confirmation, the map recenters and returns the confirmed location.

---

## 🔧 File Structure

- `addressGoogle.js` – Core logic for geocoding, address listing, and map interaction.
- Example HTML demonstrates how to initialize the script and integrate the map.
