import { StyleSheet, Text, View, TextInput, StatusBar } from 'react-native';
import Icone1 from './avatar';



export default function App() {
  return (
    <View style={styles.container}>
      <Icone1 />
      <Text style={styles.heading}>Seja bem-vindo ao EventoConnect</Text>

      <div classname="wrap-input">

        

      </div>


    </View>


  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: "column",
    backgroundColor: '#348CBD',
    alignItems: 'center',
    padding: 80

  },
  form: {
    backgroundColor: '#7EB7D8',
    width: 180,
    borderRadius: 8,
    padding: 14,
    marginTop: 150,
    alignItems: 'center',


  },








});



