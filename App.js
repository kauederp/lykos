import { StatusBar } from 'expo-status-bar';
import * as React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { WebView } from 'react-native-webview';

export default function App() {

  return (

    <WebView 
      style={styles.container}
      // alterar o ip para testes 
      source={{ uri: 'http://10.0.0.107/lykos/webview/?p=inicio' }}
    />

  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#134779',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
