import { StatusBar } from 'expo-status-bar';
import * as React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { WebView } from 'react-native-webview';

export default function App() {

  return (

    <WebView 
      style={styles.container}
      source={{ uri: 'http://10.0.0.105/lykos/webview/?p=inicio' }}
    />

  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#6b5876',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
